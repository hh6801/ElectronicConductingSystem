<?php
session_start();
require_once ("database.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Đăng Nhập</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="signin.css" rel="stylesheet">
  </head>

  <?php
  $error = null;
  $email = '';
  $password = '';

  if (isset($_POST['email']) && isset($_POST['password'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (empty($email)) {
          $error = 'Vui lòng nhập email';
      }
      else if (empty($password)) {
          $error = 'Vui lòng nhập mật khẩu';
      }
      else if (strlen($password) < 6) {
          $error = 'Mật khẩu không chính xác';
      }
      else{
          $result = login($email, $password);
          if ($result['code'] ==0)
          {
              $data = $result['data'];
              $_SESSION['logged'] = '1';
              $_SESSION['email'] = $email;
              $_SESSION['password'] = $password;
              $_SESSION['fullname'] = $data['hoVaten'];
              $_SESSION['gender'] = $data['gioiTinh'];
              $_SESSION['birth'] = $data['ngaysinh'];
              $_SESSION['phonenumber'] = $data['soDienThoai'];
              $_SESSION['type'] = $data['type'];
              header('Location: manager_employee.php');
              exit();
          }else {
              $error = $result['error'];
          }
      }
  }
  ?>
  <body class="text-center">
    <form method="post" class="form-signin">
      <img class="mb-4 ml-2" src="./Image/logo.png" alt="logo" width="100%">
      <h1 class="h3 mb-3 font-weight-normal">Chào! hãy đăng nhập</h1>
           <?php
           if (!empty($error)) {
               echo "<div class='alert alert-danger'>$error</div>";
           }
           ?>
      <label for="email" class="sr-only">Email address</label>
      <input type="email" value="<?= $email ?>" id="email" name ="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="password" class="sr-only">Password</label>
      <input type="password" value="<?= $password ?>" id="password" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Ghi nhớ tôi
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng Nhập</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
    </form>
  </body>
</html>
