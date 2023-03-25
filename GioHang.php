<?php
session_start();
ob_start();
require_once('database.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="GioHang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="GioHang.js"></script>
    <title>Trang Chu</title>
</head>
<body>
<?php

require_once('./Include/index_Nav.php');

?>
<div class="container-fluid">
    <div class="alert alert-primary mt-5" role="alert" style="align-content: center">
        Do ảnh hưởng của dịch Covid-19, một số khu vực có thể nhận hàng chậm hơn dự kiến. Ok-Mart đang nỗ lực giao các đơn hàng trong thời gian sớm nhất. Cám ơn sự thông cảm của quý khách!
    </div>
<!--    <h1 style="padding-left: 200px">Giỏ hàng</h1>-->
    <h2 class="mt-5" style="margin: 0 0 42px 130px">Giỏ hàng</h2>
</div>

<div class="container-fluid" style="flex-wrap: wrap;display: flex">
    <?php
    if(isset($_POST['mua'])){
        $madh = random_string();
        $SDT = $_SESSION['phonenumber'];
        $ten = "Vưu Thịnh";
        $thanhpho = "Hồ Chí Minh";
        $diachi = "19 Nguyễn Hữu Thọ";
        $quanhuyen = "quận 7";
        if (empty($ten)) {
            $error1 = 'Nhập họ tên đầy đủ';
        }
        else if (empty($SDT)) {
            $error1 = 'Nhập số điện thoại';
        }
        else if (empty($thanhpho)) {
            $error1 = 'Nhập thành phố';
        }
        else if (empty($diachi)) {
            $error1 = 'Nhập điạ chỉ chi tiết';
        }
        else if (empty($quanhuyen)) {
            $error1 = 'Nhập quận/huyện';
        }
        else {
            $tongtien = $_SESSION['tongCong'];
            addBill($madh,$ten,$SDT,$thanhpho,$quanhuyen,$diachi,$tongtien);
            $_SESSION['madh'] = $madh;
            //echo $_SESSION['mahd'];
            header('Location: DonHang.php');
        }

    }
    ?>
    <div class="card" style="height: 530px;width: 500px;margin-left: 250px">
        <div class="card-body">
            <form class="form-group" method="post" style="margin-bottom: 100px">
                <h3>Giao tới</h3>
                <div class="form-outline mb-4">
                    <input name="ten" type="text" id="ten" class="form-control"  >
                    <label class="form-label" for="form6Example3">Họ và tên</label>
                </div>
                <div class="form-outline mb-4">
                    <input name="DC" type="text" id="DC" class="form-control" />
                    <label class="form-label" for="form6Example4">Địa chỉ</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="mail" id="mail" class="form-control" name="mail">
                    <label class="form-label" for="form6Example5">Email</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="sdt" class="form-control" name="sdt"/>
                    <label class="form-label" for="form6Example6">Số điện thọai</label>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="city" class="form-control" name="city"/>
                            <label class="form-label" for="">Thành phố</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="quan" class="form-control" name="quan"/>
                            <label class="form-label" for="form6Example2">Quận,huyện</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card" style="margin-left: 150px; height: 530px; width: 590px;overflow: auto;">
        <div class="card-ui-content row" style="width: 550px;">
            <h3 class="name" style="width: 490px;margin-left: 50px;margin-top: 20px">Danh sách sản phẩm</h3>
            <div style="width: 490px">
                <div class="product-cart-left" style="height: 300px;width: 500px;margin-left: 20px;">
                    <?php
                        $sdt = $_SESSION['phonenumber'];
                        $result = getItemFromCart($sdt);
                        if (isset($_POST['plus'])){
                            $maS = $_POST['plus'];
                            $giohang = getSoLuong($_POST['plus']);
                            updatePNumber($sdt, $maS, $giohang['soLuong']);
                            header("refresh:0");
                        }
                        if (isset($_POST['minus'])){
                            $maS = $_POST['minus'];
                            $giohang = getSoLuong($_POST['minus']);
                            updateMNumber($sdt, $maS, $giohang['soLuong']);
                            header("Refresh:0");
                        }
                        if (isset($_POST['remove'])){
                            $maS = $_POST['remove'];
                            deleteItem($sdt, $maS);

                            header("refresh:0");
                        }
                        if (isset($_POST['thanhtoan'])){
                            header("refresh:0");
                        }
                        $tongTT = 0;

                        if ($result->num_rows > 0) {


                        while($row = $result->fetch_assoc()) {
                        $result1 = getItemCart($row['maSanPham']);
                        $anh = getImage($row['maSanPham']);

                        if ($result1->num_rows > 0) {
                        while($row1 = $result1->fetch_assoc()) {
                        $gia = product_price($row1['gia']);
                        $tong = product_price($row1['gia'] * $row['soLuong']);
                        $tongTT = $tongTT + ($row1['gia'] * $row['soLuong']);
                    ?>
                    <form method="post" style="margin-left: 40px;">
                        <div class="item-product-cart" style="height: 150px;width: 500px">
                            <div class="div-of-btn-remove-cart" style="float: left; padding-top: 35px" >
                                <a class="btn-remove-cart" type="submit" href=""><button name ="remove" value ="<?= $row['maSanPham']?>" class="fa fa-close" style="font-size:20px; color:black; background-color:white; border: none;width: 20px;height: 20px"></button></a>
                            </div>
                            <div class="img-product-cart" style="width: 100px; float: left" >
                                <img src="./Image/Laptop/<?= $anh['tenAnh'] ?>" alt="" style="width: 100px;height: 100px">
                            </div>
                            <div class="group-product-info" >
                                <div class="info-product-cart" style="float: left;width: 176px;padding-top: 5px;padding-left: 10px;">
                                    <p class="proname"><?= $row['ten'] ?></p>
                                    <span class="giasp"><?= product_price($row['gia']) ?></span>
                                </div>
                                <div class="number-product-cart" style="float: right;">
                                    <div class="product-quantity" style="padding-left: 15px">
                                        <button class="fa fa-minus"  name="minus" value = "<?= $row['maSanPham']?>"></button>
                                        <input name="input" class="quantity"  type="text" value="<?= $row['soLuong'] ?>" style="width: 50px;text-align: center">
                                        <button class="fa fa-plus"  name="plus" value = "<?= $row['maSanPham']?>"></button>
                                    </div>
                                    <div class="cart-price" style="text-align: center;">
                                        <br>
                                        <span class="text-price-total">Thành tiền:</span><br>
                                        <span class="total-price" style="font-weight: bold; color: orange; font-size: 22px;padding-bottom: 10px"><?= $tong ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        }
                        }
                        }
                        ob_end_flush();
                        ?>
                    </form>
                </div><br>
            </div>
        </div>
    </div>
    <?php
    $maGiamGia = getMaGiamGia($sdt);
    $mgg = $maGiamGia['maGiamGia'];
    $ptg = $maGiamGia['phanTramGiam'];
    ?>
    <div class="card " style="margin-left: 250px; height: 210px; width: 500px;display: inline-block">
        <div  style="margin-left: 10px;margin-top: 4px">
            <p class="name" ><h4 style="margin-left: 10px">Hình thức vận chuyển</h4>
            <script>
                function check1(e) {
                    console.log(e.className)

                    if (e.className == 'htvc1') {
                        e.parentElement.style.backgroundColor = '#e5fdfd';
                        e.parentElement.style.border = '1px solid #1660CF';
                        document.querySelector('.trans2').style.backgroundColor = 'white';
                        document.querySelector('.trans2').style.border = "white";
                        var price = 20000;
                    }
                    if (e.className == 'htvc2') {
                        e.parentElement.style.backgroundColor = '#e5fdfd';
                        e.parentElement.style.border = '1px solid #1660CF';
                        console.log(e.className)
                        document.querySelector('.trans1').style.backgroundColor = 'white';
                        document.querySelector('.trans1').style.border = "white"
                        var price = 29000;
                    }
                    document.getElementById("phiship").innerHTML = price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
                    var tong = '<?php echo $tongTT; ?>';
                    tong = parseFloat(tong);
                    var Total = price + tong;
                    document.getElementById("tongcong").innerHTML = Total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
                }
            </script>
            <form action="" class="transport" style="margin-left: 10px">
                <div class="trans1">
                    <input type="radio" name="htvc1" id="htvc1" class="htvc1" value="20.000" checked onclick="check1(this)">
                    <label class="date" for="htvc1"><b>20.000đ</b>  Thường (5 - 13 ngày)</label>
                    <img src="./Image/giaoThuong.svg" alt="giao thuong" style="float: right; margin-right: 10px">
                </div>

                <div class="trans2">
                    <input type="radio" name="htvc1" id="htvc2" class="htvc2" value="29.000" onclick="check1(this)">
                    <label class="date" for="htvc2"><b>29.000đ</b>  Nhanh (5 - 9 ngày)</label>
                    <img src="./Image/giaoNhanh.svg" alt="giao Thuong" style="float: right; margin-right: 10px;margin-bottom: 2px">
                </div>
        </div>
    </div>

    <script>
        function checkgg() {
            var x = document.getElementById("maGiamGia");
            const maGiamGia = '<?php echo $mgg; ?>' ;
            var PhanTramGiamGia = <?php echo $ptg; ?> ;
            PhanTramGiamGia = parseFloat(PhanTramGiamGia) * 100 + "%";
            if (document.getElementById("phiship").innerHTML == "29.000") {
                var price = 29000;
            }
            if (document.getElementById("phiship").innerHTML == "20.000") {
                var price = 20000;
            }
            var tong = '<?php echo $tongTT; ?>';
            tong = parseFloat(tong);
            if (maGiamGia == x.value){
                document.getElementById("mgg").innerHTML = PhanTramGiamGia.toString();
                var gg =  parseFloat('<?php echo $ptg; ?>')
                var Total = price + tong-(tong * gg);
                document.getElementById("tongcong").innerHTML = Total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
            }
            else {
                document.getElementById("mgg").innerHTML = '';
                var Total = price + tong;
                document.getElementById("tongcong").innerHTML = Total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
            }
        }
    </script>
    <?php
    $tongtien = $tongTT + $tongTT*$ptg;

    ?>
    <div class="card" style=" height: 180px; width: 470px; display: inline-block; margin-left: 150px">
        <p class="name" ><h4 style="margin-left: 30px">Mã giảm giá</h4>
        <div class="form-outline mb-4" style="margin-left: 30px;margin-bottom: 50px">
            <label class="form-label" for="form6Example5">Nhập ngay nếu có</label>

            <input type="text" id="maGiamGia" class="form-control" style="width: 400px" checked onchange = "checkgg()">
        </div>
    </div>
    <div class="card " style="margin-left: 250px; height: 210px; width: 500px; display: inline-block">
        <p class="name" ><h4 style="margin-left: 50px">Phương thức thanh toán</h4>
        <form method="post" class="payment" >
            <div class="trans3" style="margin-left: 20px;width: 450px">
                <input type="radio" name="htvc2" id="htvc3" class="htvc3" checked onclick="check2(this)">
                <label class="date" for="htvc3"><b>Qua ví</b>   (Thanh toán qua ví OK-Cart)</label>
                <img src="./Image/yandex.svg" alt="yandex logo" style="float: right; margin-right: 10px;margin-bottom: 2px">
            </div>
            <div class="trans4" style="margin-left: 20px;width: 450px">
                <input type="radio" name="htvc2" id="htvc4" class="htvc4" onclick="check2(this)">
                <label class="date" for="htvc4"><b>Thanh toán trực tiếp khi nhận hàng</b></label>
                <img src="./Image/Untitled.png" alt="logo" style="float: right; padding-bottom: 10px;height: 60px;width: 45px;padding-bottom: 25px">
            </div>
        </form>
    </div>

    <div class="card" style="margin-left: 150px; height: 211px; width: 400px;margin-bottom: 50px">

        <form method="post">
            <div class="container-fluid1" style="flex-wrap: wrap;display: flex;padding-top:20px">
                <p class="Mh1">Tạm tính</p>
                <p class="Mh2"><?= product_price($tongTT) ?></p>
            </div>
            <div class="container-fluid1" style="flex-wrap: wrap;display: flex">
                <p class="Mh1">Giảm giá</p>
                <p class="Mh2" id="mgg"></p>
            </div>
            <div class="container-fluid1" style="flex-wrap: wrap;display: flex;">
                <p class="Mh1">Phí ship</p>
                <p class="Mh2" style="padding-left:207px" id="phiship"></p>
            </div>
            <div class="container-fluid1" style="flex-wrap: wrap;display: flex;">
                <h4 class="Mh1">Tổng cộng</h4>
                <p class="tongcong" style="padding-left:165px" id="tongcong">0</p>
            </div>
            <input class="checkout-btn" style="text-align: center;width: 398px" type="submit" value="Mua hàng" name="mua">
        </form>
    </div>
</div>
</body>
