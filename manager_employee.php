<?php
session_start();
if(!isset($_SESSION['type'])){
    header('Location: login.php');
    exit();
}
require_once('database.php');
?>
<?php
$error = '';
$success = '';
$birth = '';
$name = '';
$email = '';
$phone = '';
$gender = '';
$deg = '';
$pos ='';
$id = '';
if(isset($_POST['birth']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['selectGender']) && isset($_POST['deg']) && isset($_POST['selectPos']) && isset($_POST['id'])) {
    $birth = $_POST['birth'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['selectGender'];
    $deg = $_POST['deg'];
    $pos = $_POST['selectPos'];
    $id = $_POST['id'];
    if (empty($birth)) {
        $error = 'Nhập ngày sinh nhân viên';
    } else if (empty($name)) {
        $error = 'Nhập tên nhân viên';
    } else if (empty($email)) {
        $error = 'Nhập email';
    } else if (empty($phone)) {
        $error = 'Nhập số điện thoại nhân viên';
    } else if (empty($gender)) {
        $error = 'Vui lòng chọn giới tính';
    } else if (empty($deg)) {
        $error = 'Vui lòng nhập bằng cấp';
    } else if(empty($pos)){
        $error = 'Vui lòng chọn vị trí cho nhân viên';
    } else if(empty($id)){
        $error = 'Vui lòng nhập mã nhân viên';
    }
    else {
        $result1 = addUserAccount($email, $name, $gender,$birth, $phone); // CHo them cho du 5

        $result2 = addStaff($id, $phone, $deg, $pos);

//        if ($result2['code'] == 0) {
//            $check = true;
//            $success = 'Đăng ký thành công';
//        } else if ($result1['code'] == 3 || $result2['code'] == 3) {
//            $error = 'Tên đăng nhập đã tồn tại';
//        } else {
//            $error = 'Xảy ra lỗi. Vui lòng thử lại sau';
//        }
    }
}

?>
<?php
if(isset($_POST['deleteConfirm'])) {
    $id = $_POST['deleteConfirm'];
    deleteUser($id);
}
//   deleteUser('NV04');
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
    <title>Manage Employee</title>
</head>
<body>

<!-- nav -->
<nav class="navbar navbar-light bg-white navbar-expand-xl ">
    <!--  logo-->

    <!--  list-->
    <div class="collapse navbar-collapse" id="navbar">

    </div>
    <a class="navbar-brand" href="">
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

<!-- dashboard contents -->
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-lg-3 col-md-3">
            <div class="list-group small">
                <?php
                    require_once ('item.php');
                ?>
            </div>
        </div>
        <div class="col-lg-9 col-md-9">
            <table class="table table-striped table-hover bg-light small" id="table">
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Thông tin</th>
                    <th>Sửa</th>
                    <th>Xóa nhân viên</th>
                </tr>
                <!--                    --><?php
                //                    if(isset($_GET['delete'])) {
                //                        $id = $_GET['delete'];
                //                        deleteUser($id);
                //                        header('Location: manager_employee.php');
                //                    }
                //                    ?>
                <?php
                $result = getUsers();
                if($result) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['maNhanVien'];
                        $name = $row['hoVaTen'];
                        $email = $row['email'];
                        $joinDay = $row['ngayVaoLam'];
                        $phone = $row['soDienThoai'];
                        $pos = $row['chucVu'];
                        ?>
                        <tr>
                            <td><?= $id?></td>
                            <td><?= $name?></td>
                            <td><?= $email?></td>
                            <td><a href="#" data-toggle="modal" data-target="#employee_details1" class="btn btn-sm btn-block btn-info">Xem chi tiết</a></td>
<!--                            <td>-->
<!--                                <button data-id="--><?//= $phone ?><!--" href="#" data-toggle="modal"-->
<!--                                        data-target="#employee_edit_details1" id="btn-edit"-->
<!--                                        class="btn btn-sm btn-block btn-info">Xem Chi Tiết-->
<!--                                </button>-->
<!--                            </td>-->
                            <td>
                                <button data-id="<?= $phone ?>" href="#" data-toggle="modal"
                                        data-target="#employee_edit_details1" id="btn-edit"
                                        class="btn btn-sm btn-block btn-info">Edit
                                </button>
                            </td>

<!--                            <td><a href="#" data-toggle="modal" data-target="#employee_edit_details1" class="btn btn-sm btn-edit btn-block btn-info">Edit</a></td>-->
                            <form method="post">
                                <td id="btn-delete">
                                    <button href="#"  type="submit" name="deleteConfirm" value="<?= $id ?>" class="btn btn-sm btn-block btn-delete" onclick="return confirm('Are you sure you want to delete \<?=$name?> \?');">-</button>
                                </td>
                            </form>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>
<!-- dashboard contents -->

<!-- Add Employee Modal -->
<div class="modal fade" id="add_employee" tabindex="-1" aria-labelledby="add_employee" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông Tin Nhân Viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" action="manager_employee.php">
                    <div class="mb-3">
                        <input type="email"  id="email" name="email" class="form-control form-control-sm" placeholder="Email nhân viên" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="name" name="name" class="form-control form-control-sm" placeholder="Họ và tên nhân viên" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-control form-control-sm" name="selectGender">
                            <option value="Nam">Nam</option>
                            <option value="Nữ" >Nữ</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input placeholder="Ngày sinh"  name="birth" class="form-control form-control-sm" type="text" onfocus="(this.type='date')" id="date">
                    </div>
                    <div class="mb-3">
                        <input type="text"  id="id" name="id" class="form-control form-control-sm" placeholder="ID" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel"  id="phone" name="phone" class="form-control form-control-sm" placeholder="Số điện thoại" required>
                    </div>
                    <div class="mb-3">
                        <input type="text"  id="deg" name="deg" class="form-control form-control-sm" placeholder="Bằng cấp" required>
                    </div>
                    <div class="mb-3" >
                        <select class="form-control form-control-sm" name="selectPos">
                            <option value="Kế Toán">Kế toán</option>
                            <option value="Quản lý đơn hàng">Quản lý đơn hàng</option>
                            <option value="Quản lý kho">Quản lý kho</option>
                            <option value="Nhân viên bán hàng">Nhân viên bán hàng</option>
                        </select>
                    </div>
                    <?php
                    if (!empty($error)) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                    ?>
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
            <table class="table table-bordered" id="table">
                <?php
                $result = getUsers();
                if($result) {
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
                ?>
            </table>
        </div>
    </div>
</div>
<?php

$ngaySinh = '';
$hoVaTen = '';
$email = '';
$soDienThoai = '';
$chucVu = '';
if (isset($_POST['ngaySinh']) && isset($_POST['hoVaTen']) && isset($_POST['email']) && isset($_POST['soDienThoai']) && isset($_POST['chucVu'])) {
   $ngaySinh = $_POST['ngaySinh'];
   $hoVaTen = $_POST['hoVaTen'];
   $email = $_POST['email'];
   $soDienThoai = $_POST['soDienThoai'];
   $chucVu = $_POST['chucVu'];
    editUser($ngaySinh,$hoVaTen,$email,$soDienThoai,$chucVu);}

?>
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
                <form method="post">
                    <div class="mb-3">
                        <input id="modal__ngaySinh" name="ngaySinh" type="date" class="form-control form-control-sm" value="2001/12/10"  required>
                    </div>
                    <div class="mb-3">
                        <input id="modal__hoVaTen" name="hoVaTen" type="text" class="form-control form-control-sm" value="John Doe" required>
                    </div>
                    <div class="mb-3">
                        <input id="modal__email" name="email" type="email" class="form-control form-control-sm" value="johndoe@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <input id="modal__soDienThoai" name="soDienThoai" type="tel" class="form-control form-control-sm" value="+919876543210" required>
                    </div>
                    <div class="mb-3">
                        <input id="modal__ChucVu" hidden>
                        <select class="form-control form-control-sm" name="chucVu">
                            <option value="Nhân viên kế toán">Kế toán</option>
                            <option value="Quản lý đơn hàng">Quản lý đơn hàng</option>
                            <option value="Quản lý kho">Quản lý kho</option>
                            <option value="Bán hàng">Nhân viên bán hàng</option>
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

<script>
    const table = document.getElementById('table');
    const modalNgaySinh = document.getElementById('modal__ngaySinh');
    const modalhoVaTen = document.getElementById('modal__hoVaTen');
    const modalEmail = document.getElementById('modal__email');
    const modalSoDienThoai= document.getElementById('modal__soDienThoai');
    const modalChucVu = document.getElementById('modal__ChucVu');
    // const modalSoLuong = document.getElementById('modal__soLuong');
    // const modalNgayNhap = document.getElementById('modal__ngayNhap');

    table.addEventListener('click', function (e) {

        const button = e.target.closest('#btn-edit');

        const {id} = e.target.dataset;
        if (!button) return;
        fetch(`getUserDetails.php?sdt=${id}`).then(response => response.json()).then(data => {
            modalNgaySinh.value = data.ngaySinh;
            modalhoVaTen.value = data.hoVaTen;
            modalEmail.value = data.email;
            modalSoDienThoai.value = data.soDienThoai;
            modalChucVu.value = data.chucVu;
        });
    });
</script>
    </body>
</html>