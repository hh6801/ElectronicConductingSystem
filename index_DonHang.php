<!DOCTYPE html>
<html lang="en">
<head>
    <!--    <meta charset="UTF-8">-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Đơn hàng</title>
    <link rel="stylesheet" href="sanPham.css">
</head>
<body>
<?php
require_once('./Include/index_Nav.php');
?>
<div class="container-fluid">
    <div class="alert alert-primary mt-5" role="alert" style="align-content: center">
        Do ảnh hưởng của dịch Covid-19, một số khu vực có thể nhận hàng chậm hơn dự kiến. Ok-Mart đang nỗ lực giao các đơn hàng trong thời gian sớm nhất. Cám ơn sự thông cảm của quý khách!
    </div>
    <h3 class="mt-5">Đơn hàng</h3>
    <table class="table table-hover mt-5">
        <thead>
        <th># Mã đơn</th>
        <th>Sản phẩm</th>
        <th>Giao đến</th>
        <th>Tổng tiền</th>
        <th>Trạng thái đơn hàng</th>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><h5><span class="badge badge-info">Đang vận chuyển</span></h5></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@sdsd</td>
            <td><h5><span class="badge badge-success">Đã giao</span></h5></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td><h5><span class="badge badge-warning">Đang chờ xác nhận</span></h5></td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td><h5><span class="badge badge-danger">Đã hủy đơn hàng</span></h5></td>
        </tr>
        </tbody>
    </table>
</div>
<!--Footer nha-->
<?php
require_once('./Include/Footer.php');
?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>