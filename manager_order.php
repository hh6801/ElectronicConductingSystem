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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./TrangChu.css">
    <title>Manage Order</title>
  </head>
  <body>
    
    <!-- nav -->
    <nav class="navbar navbar-light bg-white navbar-expand-xl ">
        <div class="collapse navbar-collapse" id="navbar">
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
                <table class="table table-striped table-hover bg-light small">
                    <tr class="table-dark">
                        <th>Order date</th>
                        <th>Order ID</th>
                        <th>Total Price</th>
                        <th>Purchaser ID</th>
                        <th>Purchaser Name</th>
                        <th>Address</th>
                        <th>Notes</th>
                        <th>Status</th>
                        <th>Order Detail</th>
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>264, Tân Phong, Q7, tp.HCM</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                        <td id="btn-delete"><a href="#" class="btn btn-sm btn-block btn-delete" onclick="confirm('Are you sure you want to delete \' John Doe \'?');">-</a></td>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>264, Tân Phong, Q7, tp.HCM</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                        <td id="btn-delete"><a href="#" class="btn btn-sm btn-block btn-delete" onclick="confirm('Are you sure you want to delete \' John Doe \'?');">-</a></td>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>264, Tân Phong, Q7, tp.HCM</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                        <td id="btn-delete"><a href="#" class="btn btn-sm btn-block btn-delete" onclick="confirm('Are you sure you want to delete \' John Doe \'?');">-</a></td>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>264, Tân Phong, Q7, tp.HCM</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                        <td id="btn-delete"><a href="#" class="btn btn-sm btn-block btn-delete" onclick="confirm('Are you sure you want to delete \' John Doe \'?');">-</a></td>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>264, Tân Phong, Q7, tp.HCM</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                        <td id="btn-delete"><a href="#" class="btn btn-sm btn-block btn-delete" onclick="confirm('Are you sure you want to delete \' John Doe \'?');">-</a></td>
                    </tr>
                    <tr>
                        <td>11/11/2021</td>
                        <td>607966</td>
                        <td>159.753.000 vnđ</td>
                        <td>000004</td>
                        <td>Lelouch vi Britania</td>
                        <td>264, Tân Phong, Q7, tp.HCM</td>
                        <td>no</td>
                        <td>Checking Order</td>
                        <td><a href="#" data-toggle="modal" data-target="#order_details1" class="btn btn-sm btn-block btn-info">Details</a></td>
                        <td id="btn-delete"><a href="#" class="btn btn-sm btn-block btn-delete" onclick="confirm('Are you sure you want to delete \' John Doe \'?');">-</a></td>
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

    <!-- Edit order Detaisl -->
    <div class="modal fade" id="order_edit_details1" tabindex="-1" aria-labelledby="order_edit_details1" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add order Details</h5>
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
                        <input type="tel" class="form-control form-control-sm" value="Graphic Designer" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success btn-block">Edit order</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>