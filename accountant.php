<?php
session_start();
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
    <title>Accountant</title>
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
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">
                <div class="d-flex justify-content-center">
                  <img src=".\Image\giohang.svg" alt="gioHang">
                </div>
                Giỏ hàng
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#">
                <div class="d-flex justify-content-center">
                  <img src=".\Image\dangnhap.svg" alt="dangNhap">
                </div>
                Logout
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">
                <div class="d-flex justify-content-center">
                  <img src=".\Image\donHang.svg" alt="donHang">
                </div>
                Đơn hàng
              </a>
            </li> -->
          </ul>
        </div>
      </nav>
    <!-- nav -->

    <!-- dashboard contents -->
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-3 col-md-3">
                <div class="list-group small">
                    <a href="#" class="list-group-item">Our purchase</a>
                    <a href="manager_order.php" class="list-group-item">Customer purchase</a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                OUR PURCHASE
                <table class="table table-striped table-hover bg-light small">
                    <tr class="table-dark">
                        <th>Date</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Counterparty</th>
                        <th>Type</th>
                        <th>Notes</th>
                        <th>Money</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>6/11/2021</td>
                        <td>Purchase 30 new Laptop MSI Stealth GS66 10SE</td>
                        <td>10</td>
                        <td>MSI Company</td>
                        <td>Laptop</td>
                        <td>no</td>
                        <td>159.753.000 vnđ</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>6/11/2021</td>
                        <td>Purchase 30 new Laptop MSI Stealth GS66 10SE</td>
                        <td>10</td>
                        <td>MSI Company</td>
                        <td>Laptop</td>
                        <td>no</td>
                        <td>159.753.000 vnđ</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>6/11/2021</td>
                        <td>Purchase 30 new Laptop MSI Stealth GS66 10SE</td>
                        <td>10</td>
                        <td>MSI Company</td>
                        <td>Laptop</td>
                        <td>no</td>
                        <td>159.753.000 vnđ</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>6/11/2021</td>
                        <td>Purchase 30 new Laptop MSI Stealth GS66 10SE</td>
                        <td>10</td>
                        <td>MSI Company</td>
                        <td>Laptop</td>
                        <td>no</td>
                        <td>159.753.000 vnđ</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>6/11/2021</td>
                        <td>Purchase 30 new Laptop MSI Stealth GS66 10SE</td>
                        <td>10</td>
                        <td>MSI Company</td>
                        <td>Laptop</td>
                        <td>no</td>
                        <td>159.753.000 vnđ</td>
                        <td>Paid</td>
                    </tr>         
                </table>
                CUSTOMER PURCHASE
                <table class="table table-striped table-hover bg-light small">
                    <tr class="table-dark">
                        <th>Order date</th>
                        <th>Order ID</th>
                        <th>Total Price</th>
                        <th>Purchaser ID</th>
                        <th>Purchaser Name</th>
                        <th>Notes</th>
                        <th>Status</th>
                        <th>Order Detail</th>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- dashboard contents -->

  

    <!-- Details Model -->
    <div class="modal fade" id="order_details1" tabindex="-1" aria-labelledby="order_details1" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Quantity</th>
                    <th>Tên sản phẩm</th>
                    <th>Thành tiên</th>
                </tr>
                <tr>
                    <th>1</th>
                    <td>Máy tính để bàn - PC Acer Aspire AS-XC780</td>
                    <td>11.690.000vnđ</td>
                </tr>
                <tr>
                    <th>1</th>
                    <td>Máy tính để bàn - PC Acer Aspire AS-XC780</td>
                    <td>11.690.000vnđ</td>
                </tr>
                <tr>
                    <th>1</th>
                    <td>Máy tính để bàn - PC Acer Aspire AS-XC780</td>
                    <td>11.690.000vnđ</td>
                </tr><tr>
                    <th>1</th>
                    <td>Máy tính để bàn - PC Acer Aspire AS-XC780</td>
                    <td>11.690.000vnđ</td>
                </tr>
                </tr><tr>
                    <th>1</th>
                    <td>Máy tính để bàn - PC Acer Aspire AS-XC780</td>
                    <td>11.690.000vnđ</td>
                </tr>
            </table>
        </div>
        </div>
    </div>

  

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>