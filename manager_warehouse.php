<?php
session_start();
if (!isset($_SESSION['type'])) {
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./TrangChu.css">
    <title>Manage Warehouse</title>
</head>
<body>

<!-- nav -->
<nav class="navbar navbar-light bg-white navbar-expand-xl ">
    <!--  logo-->

    <!--  list-->
    <div class="collapse navbar-collapse" id="navbar">
    </div>
    <a class="navbar-brand" href="#">
        <img src=".\Image\logo.svg" width="381" height="163" class="d-inline-block" alt="logo">
    </a>
    <div>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="">
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
if (isset($_POST['deleteConfirm'])) {
    $maSanPham = $_POST['deleteConfirm'];
    delSanPham($maSanPham);
}
?>
<!-- dashboard contents -->
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-lg-3 col-md-3">
            <div class="list-group small">
                <a href="manager_employee.php" class="list-group-item">All Items</a>
                <a href="#" class="list-group-item" data-toggle="modal" data-target="#add_employee">Add Item</a>
            </div>
        </div>
        <div class="col-lg-9 col-md-9">
            <table class="table table-striped table-hover bg-light small" id="table">
                <tr class="table-dark">
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Thương Hiệu</th>
                    <th>Số Lượng</th>
                    <th>Ngày Nhập Hàng</th>
                    <th>Giá</th>
                    <th>Khuyến Mãi</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                <?php
                $result = getProduct();
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['maSanPham'];
                        $name = $row['ten'];
                        $price = $row['gia'];
                        $status = $row['trangThai'];
                        $para = $row['thongSo'];
                        $priceReduce = $row['giaSauKhiGiam'];
                        $quality = $row['soLuongTrongKho'];
                        $dayImport = $row['ngayNhap'];

                        $brand = $row['tenSanPham'];
                        ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $name ?></td>
                            <td><?= $brand ?></td>
                            <td><?= $quality ?></td>
                            <td><?= $dayImport ?></td>
                            <td><?= $price ?> vnđ</td>
                            <td><?= $status ?></td>

                            <td>
                                <button data-id="<?= $id ?>" href="#" data-toggle="modal"
                                        data-target="#employee_edit_details1" id="btn-edit"
                                        class="btn btn-sm btn-block btn-info">Edit
                                </button>
                            </td>
                            <form method="post">
                                <td id="btn-delete">
                                    <button href="#" type="submit" name="deleteConfirm" value="<?= $id ?>"
                                            class="btn btn-sm btn-block btn-delete"
                                            onclick="return confirm('Are you sure you want to delete \<?= $name ?> \?');">
                                        -
                                    </button>
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

<?php
$maSanPham = '';
$ten = '';
$gia = '';
$loaiSanPham = '';
$trangThai = '';
$thongSo = '';
$soLuongTrongKho = '';
$ngayNhap = '';
if (isset($_POST['maSanPham']) && isset($_POST['ten']) && isset($_POST['soLuongTrongKho']) && isset($_POST['loaiSanPham']) && isset($_POST['thongSo']) && isset($_POST['ngayNhap']) && isset($_POST['giaBan']) && isset($_POST['trangThai'])) {
    $maSanPham = $_POST['maSanPham'];
    $ten = $_POST['ten'];
    $gia = $_POST['giaBan'];
    $soLuongTrongKho = $_POST['soLuongTrongKho'];
    $loaiSanPham = $_POST['loaiSanPham'];
    $thongSo = $_POST['thongSo'];
    $trangThai = $_POST['trangThai'];
    $ngayNhap = $_POST['ngayNhap'];
    addProduct($maSanPham, $ten, $gia, $loaiSanPham, $trangThai, $thongSo, $soLuongTrongKho, $ngayNhap);

}
?>
<!-- Add Employee Modal -->
<div class="modal fade" id="add_employee" tabindex="-1" aria-labelledby="add_employee" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="mb-3">
                        <input type="text" name="maSanPham" class="form-control form-control-sm"
                               placeholder="Mã sản phẩm" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="ten" class="form-control form-control-sm" placeholder="Tên sản phẩm"
                               required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="soLuongTrongKho" class="form-control form-control-sm"
                               placeholder="Số lượng" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-control form-control-sm" name="loaiSanPham">
                            <option value="A">Asus</option>
                            <option value="HP">HP</option>
                            <option value="Mac">Macbook</option>
                            <option value="Mic">Microsoft</option>
                            <option value="MSI">MSI</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="thongSo" class="form-control form-control-sm"
                               placeholder="Thông số sản phẩm" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="date" onfocus="(this.type='date')" name="ngayNhap" class="form-control form-control-sm" placeholder="Ngày nhập"
                               required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="giaBan" class="form-control form-control-sm" placeholder="Giá"
                               required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="trangThai" class="form-control form-control-sm"
                               placeholder="Trạng Thái">
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


<!-- Edit Employee Detaisl -->
<div class="modal fade" id="employee_edit_details1" tabindex="-1" aria-labelledby="employee_edit_details1"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
//                $result = getDetailProduct($maSanPham);
//                $error = '';
                $ma = '';
                $ten = '';
                $thuongHieu = '';
                $soLuong = '';
                $ngayNhap = '';
                $giaBan = '';
                $tinhTrang = '';
                if (isset($_POST['ma']) && isset($_POST['ten']) && isset($_POST['thuongHieu']) && isset($_POST['soLuong']) && isset($_POST['ngayNhap']) && isset($_POST['giaBan']) && isset($_POST['tinhTrang'])) {
                    $ma = $_POST['ma'];
                    $ten = $_POST['ten'];
                    $thuongHieu = $_POST['thuongHieu'];
                    $soLuong = $_POST['soLuong'];
                    $ngayNhap = $_POST['ngayNhap'];
                    $giaBan = $_POST['giaBan'];
                    $tinhTrang = $_POST['tinhTrang'];

                    upProduct($ma, $ten, $giaBan, $thuongHieu, $soLuong, $ngayNhap, $tinhTrang);
                }
                ?>
                <form method="post">
                    <div class="mb-3">
                        <input id="modal__maSanPham" type="text" name="ma" class="form-control form-control-sm" required>
                    </div>
                    <div class="mb-3">
                        <input id="modal__tenSanPham" type="text" name="ten" class="form-control form-control-sm"
                               required>
                    </div>
                    <div class="mb-3">
                        <input id="modal__thuongHieu" type="text" name="thuongHieu" class="form-control form-control-sm"
                             required>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="modal__soLuong" name="soLuong" class="form-control form-control-sm"
                               required>
                    </div>
                    <div class="mb-3">
                        <input type="date" id="modal__ngayNhap" name="ngayNhap" class="form-control form-control-sm"
                              required>
                    </div>
                    <div class="mb-3">
                        <input type="number" id="modal__giaBan" name="gia" class="form-control form-control-sm"
                                required>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="modal__tinhTrang" name="tinhTrang" class="form-control form-control-sm"
                                required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success btn-block">Edit Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
<script>
    const table = document.getElementById('table');
    const modalMasp = document.getElementById('modal__maSanPham');
    const modalTensp = document.getElementById('modal__tenSanPham');
    const modalGiasp = document.getElementById('modal__giaBan');
    const modalLoaisp= document.getElementById('modal__thuongHieu');
    const modalTrangThai = document.getElementById('modal__tinhTrang');
    const modalSoLuong = document.getElementById('modal__soLuong');
    const modalNgayNhap = document.getElementById('modal__ngayNhap');

    table.addEventListener('click', function (e) {
        const button = e.target.closest('#btn-edit');
        const {id} = e.target.dataset;
        if (!button) return;
        fetch(`getProductDetails.php?id=${id}`).then(response => response.json()).then(data => {
            console.log(data);
            modalMasp.value = data.maSanPham;
            modalTensp.value = data.ten;
            modalLoaisp.value = data.loaiSanPham;
            modalSoLuong.value = data.soLuongTrongKho;
            modalGiasp.value = data.gia;
            modalTrangThai.value = data.trangThai;
            modalNgayNhap.value = data.ngayNhap;
        });

    });

</script>
</body>
</html>