<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <!--      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
    <title>Thông tin Sản phẩm</title>
    <link rel="stylesheet" href="thongTinChiTiet.css">
</head>

<body>
<nav class="navbar navbar-light bg-white navbar-expand-xl ">
    <!--  logo-->

    <!--  list-->
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Laptop <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Linh kiện</a>
            </li>
        </ul>
    </div>
    <a class="navbar-brand" href="#">
        <img src="/Image/logo.svg" width="381" height="163" class="d-inline-block " alt="logo">
    </a>
    <div >
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="d-flex justify-content-center">
                        <img src="/Image/giohang.svg" alt="gioHang">
                    </div>
                    Giỏ hàng
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="d-flex justify-content-center">
                        <img src="/Image/dangnhap.svg" alt="dangNhap">
                    </div>
                    Đăng nhập
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="d-flex justify-content-center">
                        <img src="/Image/donHang.svg" alt="donHang">
                    </div>
                    Đơn hàng
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid" style="margin-top:48px;">
    <form class="form-inline col-5">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="d-flex flex-row bd-highlight mb-3" style="margin-top: 66px; margin-left: 10px">
        <div class="p-2 bd-highlight">
            <h2 style="font-size: 18px;">Asus Zenbook UX425EA-KI439T/i7-1165G7<span style="display: block">Windows 10 Home SL</span> </h2>
        </div>
        <div class="p-2 bd-highlight">
            <img src="./Image/Laptop/star.svg" alt="star">
            <img src="./Image/Laptop/star.svg" alt="star">
            <img src="./Image/Laptop/star.svg" alt="star">
            <img src="./Image/Laptop/star.svg" alt="star">
            <img src="./Image/Laptop/star-half.svg" alt="star-half">
            <i>1 đánh giá</i>
        </div>
    </div>
    <div style="width: fit-content; height: fit-content; margin-right: 500px; margin-top: 20px" class="float-right thongSo">
        <h5>Thông số kỹ thuật</h5>
        <table class="table table-hover">
            <tr>
                <th scope="row">CPU:</th>
                <td>Intel Core i7-1165G7 2.8GHz up to 4.7GHz 12MB</td>
            </tr>
            <tr>
                <th scope="row">RAM</th>
                <td>RAM 16GB</td>
            </tr>
            <tr>
                <th scope="row">Màn hình</th>
                <td>14 inch, 1920 x 1080 pixels (FullHD)</td>
            </tr>
        </table>
        <div class="d-flex flex-row" style="margin-top:70px;">
            <div class="p-2"><h2 style="color: #DD1D0E">29.899.000 ₫</h2></div>
            <div class="p-2">
                <a href="#">
                    <button type="button" class="btn btn-danger ml-3 muaNgay">Mua ngay</button>
                </a>
                <a href="">
                    <button type="button" class="btn btn-danger ml-3 muaNgay">Thêm vào giỏ hàng</button>
                </a>
            </div>
        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide ml-5" data-ride="carousel" style="width: 404px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
        </ol>
        <div style="width: 400px;height: 317px;" class="carousel-inner">
            <div class="carousel-item active">
                <img style="width: 400px; height: 337px;" class="d-block" src="./Image/Laptop/ThongTinChiTiet/AsusZenbookUX425EA-KI439Ti7-1165G7/Asus1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img  style="width: 400px; height: 337px;" class="d-block" src="./Image/Laptop/ThongTinChiTiet/AsusZenbookUX425EA-KI439Ti7-1165G7/Asus2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img  style="width: 400px; height: 337px;" class="d-block" src="./Image/Laptop/ThongTinChiTiet/AsusZenbookUX425EA-KI439Ti7-1165G7/Asus3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img  style="width: 400px; height: 337px;" class="d-block" src="./Image/Laptop/ThongTinChiTiet/AsusZenbookUX425EA-KI439Ti7-1165G7/Asus4.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img  style="width: 400px; height: 337px;" class="d-block" src="./Image/Laptop/ThongTinChiTiet/AsusZenbookUX425EA-KI439Ti7-1165G7/Asus5.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img  style="width: 400px; height: 337px;" class="d-block" src="./Image/Laptop/ThongTinChiTiet/AsusZenbookUX425EA-KI439Ti7-1165G7/Asus6.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img  style="width: 400px; height: 337px;" class="d-block" src="./Image/Laptop/ThongTinChiTiet/AsusZenbookUX425EA-KI439Ti7-1165G7/Asus7.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img  style="width: 400px; height: 337px;" class="d-block" src="./Image/Laptop/ThongTinChiTiet/AsusZenbookUX425EA-KI439Ti7-1165G7/Asus8.jpg" alt="Third slide">
            </div>
        </div>
        <a style="width: fit-content" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a style="width: fit-content" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div>
        <div style="margin: 56px 13px 0 12px">
            <h4>Đánh giá</h4>
        </div>
        <div class="danhGia" style="margin:10px 50px">
            <dl class="nguoiDanhGia">
                <dt>Nguyễn Hữu Hòa</dt>
                <dd class="soSaoDanhGia">
                    <img src="./Image/Laptop/star.svg" alt="star">
                    <img src="./Image/Laptop/star.svg" alt="star">
                    <img src="./Image/Laptop/star.svg" alt="star">
                    <img src="./Image/Laptop/star.svg" alt="star">
                    <img src="./Image/Laptop/star.svg" alt="star">
                </dd>
                <dd>Được</dd>
                <hr>
                <dt>Vưu Thịnh</dt>
                <dd class="soSaoDanhGia">
                    <img src="./Image/Laptop/star.svg" alt="star">
                    <img src="./Image/Laptop/star.svg" alt="star">
                    <img src="./Image/Laptop/star.svg" alt="star">
                    <img src="./Image/Laptop/star.svg" alt="star">
                </dd>
                <dd>laptop ổn</dd>
            </dl>
            <button class="btn btn-primary float-right btn-sm vietDanhGia" type="submit">Viết đánh giá</button>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
