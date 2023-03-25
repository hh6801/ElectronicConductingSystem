<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="GioHang.css">
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

  <nav class="container-fluid navbar navbar-light bg-light" style="width: 83%; height: max-content">
    <img src="./Image/logo.svg" style="width:120px; height:45px" class="d-inline-block" alt="logo">
    <span style="float: right">Chưa có tài khoản? <a href="#"> Đăng ký tài khoản</a></span>
  </nav>
</div>

<div class="container-fluid" style="flex-wrap: wrap;display: flex">
  <div class="card" style="height: 530px;width: 500px;margin-left: 150px">
    <div class="card-body">
      <form class="form" style="margin-bottom: 100px">
        <h3>Giao tới</h3>

        <div class="form-outline mb-4">
          <input type="text" id="form6Example3" class="form-control" />
          <label class="form-label" for="form6Example3">Họ và tên</label>
        </div>


        <div class="form-outline mb-4">
          <input type="text" id="form6Example4" class="form-control" />
          <label class="form-label" for="form6Example4">Địa chỉ</label>
        </div>


        <div class="form-outline mb-4">
          <input type="email" id="form6Example5" class="form-control" />
          <label class="form-label" for="form6Example5">Email</label>
        </div>


        <div class="form-outline mb-4">
          <input type="text" id="form6Example6" class="form-control" />
          <label class="form-label" for="form6Example6">Số điện thọai</label>
        </div>
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example1" class="form-control" />
              <label class="form-label" for="form6Example1">Thành phố</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example2" class="form-control" />
              <label class="form-label" for="form6Example2">Tỉnh</label>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="card" style="margin-left: 50px; height: 210px; width: 500px">
    <div class="products">
      <div class="div-of-btn-remove-cart">
        <a class="btn-remove-cart" type="submit" href=""><button name = "remove" value = "" class="fa fa-close" style="font-size:20px; color:black; background-color:white; border: none;width: 20px;height: 20px"></button></a>
      </div>
      <h3 class="name">Danh sách sản phẩm</h3>

      <form action="">
        <div class="product">
          <img src="./Image/Frame1475.png" alt="" style="width: 100px;height: 100px">
          <div class="head" style="padding-left: 10px">
            <p class="proname">Tên sản phẩm</p>
            <br>
            <div class="giasp">120000</div>
            <div class="amount-block">
              <div class="tru" onclick="tru()">-</div>
              <div class="amount">1</div>
              <div class="cong" onclick="cong()">+</div>
            </div>
          </div>
          <div class="foot" style="padding-left: 30px">

            <div class="gia">
              <p style="padding-left: 60px;padding-top: 2px;margin-bottom: 2px"> Thành tiền:</p>
              <div class="gianhieusp">120000</div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="card " style="margin-left: 150px; height: 210px; width: 500px">
    <div class="container-fluid1" style="margin-left: 10px;margin-top: 4px">
      <p class="name" ><h4 style="margin-left: 10px">Hình thức vận chuyển</h4>
      <form action="" class="transport" style="margin-left: 10px">
        <div class="trans1">
          <input type="radio" name="htvc" id="htvc1" class="htvc1" checked onclick="check1(this)">
          <label class="date" for="htvc1"><b>20.000đ</b>  Thường (5 - 13 ngày)</label>
          <img src="./Image/giaoThuong.svg" alt="giao thuong" style="float: right; margin-right: 10px">
        </div>

        <div class="trans2">
          <input type="radio" name="htvc" id="htvc2" class="htvc2" onclick="check1(this)">
          <label class="date" for="htvc2"><b>29.000đ</b>  Nhanh (5 - 9 ngày)</label>
          <img src="./Image/giaoNhanh.svg" alt="giao Thuong" style="float: right; margin-right: 10px;margin-bottom: 2px">
        </div>
      </form>
    </div>
  </div>


  <div class="card" style="margin-left: 50px; height: 180px; width: 470px">
    <p class="name" ><h4 style="margin-left: 30px">Mã giảm giá</h4>
    <div class="form-outline mb-4" style="margin-left: 30px;margin-bottom: 50px">
      <label class="form-label" for="form6Example5">Nhập ngay nếu có</label>
      <label for="formEmail"></label><input type="email" id="formEmail" class="form-control" style="width: 400px"/>

    </div>
  </div>
  <div class="card " style="margin-left: 150px; height: 210px; width: 500px">
    <div class="container-fluid1" style="margin-left: 10px;margin-top: 4px">
      <p class="name" ><h4 style="margin-left: 10px">Phương thức thanh toán</h4>
      <form action="" class="transport" style="margin-left: 10px">
        <div class="trans3">
          <input type="radio" name="htvc" id="htvc3" class="htvc3" checked onclick="check2(this)">
          <label class="date" for="htvc3"><b>Qua ví</b>   (Thanh toán qua ví OK-Cart)</label>
          <img src="./Image/yandex.svg" alt="yandex logo" style="float: right; margin-right: 10px;margin-bottom: 2px">
        </div>
        <div class="trans4" >
          <input type="radio" name="htvc" id="htvc4" class="htvc4" onclick="check2(this)">
          <label class="date" for="htvc4"><b>Qua momo</b>   (Thanh toán qua ví MoMo)</label>
          <img src="./Image/momo.svg" alt="momo logo" style="float: right; padding-bottom: 10px">
        </div>
      </form>
    </div>
  </div>
  <div class="card" style="margin-left: 50px; height: 250px; width: 400px;">
    <div class="container-fluid1" style="flex-wrap: wrap;display: flex;padding-top:20px">
      <p class="Mh1">Tạm tính</p>
      <p class="Mh2"></p>
    </div>
    <div class="container-fluid1" style="flex-wrap: wrap;display: flex">
      <p class="Mh1">Giảm giá</p>
      <p class="Mh2"> </p>
    </div>
    <div class="container-fluid1" style="flex-wrap: wrap;display: flex;">
      <p class="Mh1">Phí ship</p>
      <p class="Mh2" style="padding-left:207px"></p>
    </div>
    <div class="container-fluid1" style="flex-wrap: wrap;display: flex;">
      <h4 class="Mh1">Tổng cộng</h4>
      <p class="tongcong" style="padding-left:165px">0</p>
    </div>
    <input class="btn bt btn-primary" style="text-align: center" type="submit" value="Mua hàng">
    <!--        <button class="bt"><p style="text-align: center;color: white">Mua hàng</p></button>-->
  </div>
</div>
<?php
require_once('./Include/Footer.php');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>