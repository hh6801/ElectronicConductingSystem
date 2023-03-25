<?php
session_start();
if(!isset($_SESSION['type'])){
    header('Location: login.php');
    exit();
}
require_once('database.php');

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./TrangChu.css">
    <title>Tạo Voucher</title>
</head>
<body>

<!-- nav -->
<nav class="navbar navbar-light bg-white navbar-expand-xl ">
    <!--  logo-->

    <!--  list-->
    <div class="collapse navbar-collapse" id="navbar">
        <!-- <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Laptop <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Linh kiện</a>
          </li>
        </ul> -->
    </div>
    <a class="navbar-brand" href="#">
        <img src=".\Image\logo.svg" width="381" height="163" class="d-inline-block" alt="logo">
    </a>
    <div >
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <div class="d-flex justify-content-center">
                        <img src=".\Image\dangnhap.svg" alt="dangNhap">
                    </div>
                    Logout
                </a>
            </li>

        </ul>
    </div>
</nav>
<!-- nav -->
<?php
if(isset($_POST['deleteConfirm'])) {
    $maGiamGia = $_POST['deleteConfirm'];
    delVoucher($maGiamGia);
}
?>
<!-- dashboard contents -->
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-lg-3 col-md-3">
            <div class="list-group small">
                <a href="#" class="list-group-item" data-toggle="modal" data-target="#add_employee">Thêm Nhân Viên</a>
                <a href="" class="list-group-item">Xem doanh thu</a>
                <a href="manager_warehouse.php" class="list-group-item">Quản lý kho</a>
                <a href="" class="list-group-item">Tạo mã giảm giá</a>

            </div>
        </div>
        <div class="col-lg-9 col-md-9">
            <table class="table table-striped table-hover bg-light small">
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Mã giảm giá</th>
                    <th>% giảm</th>
                    <th>Đối tượng áp dụng</th>
                    <th>Xóa mã</th>
                </tr>

                <?php
                $result = getVoucher();
                if($result) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $maGiamGia = $row['maGiamGia'];
                        $phanTramGiamGia = $row['phanTramGiam'];
                        $soDienThoai = $row['soDienThoai'];
                        ?>
                        <tr>
                            <td><?= $id?></td>
                            <td><?= $maGiamGia?></td>
                            <td><?= $phanTramGiamGia?></td>
                            <td><?=$soDienThoai?></td>
                            <form method="post">
                                <td id="btn-delete">
                                    <button href="#"  type="submit" name="deleteConfirm" value="<?= $maGiamGia ?>" class="btn btn-sm btn-block btn-delete" onclick="return confirm('Bạn muốn xóa mã \<?=$maGiamGia?> \?');">-</button>
                                </td>
                            </form>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
            <td>
                <button name="addVoucher" data-toggle="modal" data-target="#addVoucher" class="btn btn-primary col-12"  value="Submit">Thêm mã giảm giá</button>
            </td>
        </div>
    </div>
</div>
<!-- dashboard contents -->
<?php
    $id = '';
    $maGiamGia = '';
    $phanTramGiam = '';
    $soDienThoai = '';
    $error = '';
    if(isset($_POST['id']) && isset($_POST['maGiamGia']) && isset($_POST['phanTramGiam'] )&& isset($_POST['soDienThoai']) ){
        $id = $_POST['id'];
        $maGiamGia = $_POST['maGiamGia'];
        $phanTramGiam = $_POST['phanTramGiam'];
        $soDienThoai = $_POST['soDienThoai'];
        $result = insertVoucher($id,$maGiamGia,$phanTramGiam,$soDienThoai);
    }
?>
<!-- Add Employee Modal -->
<div class="modal fade" id="addVoucher" tabindex="-1" aria-labelledby="addVoucher" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm Mã Giảm Giá</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post">
                    <div class="mb-3">
                        <input type="id"  id="id" name="id" class="form-control form-control-sm" placeholder="ID" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="maGiamGia" name="maGiamGia" class="form-control form-control-sm" placeholder="Nhập mã giảm giá" required>
                    </div>
                    <div class="mb-3">
<!--                        <input type="text" id="phanTramGiam" name="phanTramGiam" class="form-control form-control-sm" placeholder="Nhập phần trăm giảm" required>-->
                        <select class="form-control form-control-sm" name="phanTramGiam">
                            <option value="5%">5%</option>
                            <option value="10%">10%</option>
                            <option value="15%">15%</option>
                            <option value="20%">20%</option>
                            <option value="25%">25%</option>
                            <option value="50%">50%</option>

                        </select>
                        <?php
                        if (!empty($error)) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="soDienThoai" name="soDienThoai" class="form-control form-control-sm" placeholder="Lựa chọn đối tượng áp dụng (Mỗi đối tượng cách nhau bằng dấu phẩy)" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success btn-block">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Details Model -->
<div class="modal fade" id="employee_details1" tabindex="-1" aria-labelledby="employee_details1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông Tin Nhân Viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <table class="table table-bordered">
                <?php
                $result = getUsers();
                if($result) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <th>Mã nhân viên</th>
                            <td><?= $id?></td>
                        </tr>
                        <tr>
                            <th>Ngày vào làm</th>
                            <td><?= $joinDay?></td>
                        </tr>
                        <tr>
                            <th>Họ và tên</th>
                            <td><?=$name?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $email ?></td>
                        </tr>
                        <tr>
                            <th>Số điện thoại</th>
                            <td><?= $phone?></td>
                        </tr>
                        <tr>
                            <th>Chức vụ</th>
                            <td><?= $pos ?></td>
                        </tr>

                        <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>

<!-- Edit Employee Detaisl -->
<div class="modal fade" id="employee_edit_details1" tabindex="-1" aria-labelledby="employee_edit_details1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm Thông Tin Nhân Viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-sm" value="12-08-2020" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-sm" value="John Doe" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control form-control-sm" value="johndoe@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control form-control-sm" value="+919876543210" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-control form-control-sm" >
                            <option value="keToan">Kế toán</option>
                            <option value="quanLyDonHang">Quản lý đơn hàng</option>
                            <option value="quanLyKho">Quản lý kho</option>
                            <option value="banHang">Nhân viên bán hàng</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success btn-block">Edit Employee</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>