<?php

include "../controller/AuthController.php";
$auth = new Authentication();
if (isset($_POST['login'])) {
  $res = $auth->userLogin($_POST['email'], $_POST['password']);
  if ($res==0) {
    echo "<script>alert('Incorrect email or password')</script>";
  }else if ($res==3){
    echo "<script>alert('Your Account Has been blocked');</script>";
  }
}

if (isset($_SESSION['id'])) {
  if ($_SESSION['type'] == 1) {
    header('Location:../admin/admin.php');
  }
  if ($_SESSION['type'] == 0) {
    header('Location:user-library.php');
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>USC Library | Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../logo-brand.png" type="image/x-icon">
  <?php include "../includes/link.php" ?>
  <link rel="stylesheet" href="../../src/css/book-login.css">
  <script src="../../src/js/login.js"></script>
</head>

<body>




  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
        <!-- <h3 class="mt-4">USC Library Management</h3> -->
      </div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">


                <h3 class="login-heading mb-4 ">Welcome Back Warrior! <br> USC Library Management</h3>
                <!-- <h3 class="login-heading mb-4">Welcome back!</h3> -->
                <form method="post">


                  <div class="field">
                    <input type="email" required class="holder  " name="email">
                    <label title="Email" data-title="Email"></label>

                  </div>
                  <div class="field">
                    <input type="password" required class="holder num1" name="password" id="password">
                    <label title="Password" data-title="Password"></label>
                  </div>


                  <input type="submit" name="login" class="btn btn-block btn-login btn-primary">
                  <div class="text-center">
                    <a class="small" href="#">Forgot password?</a><br>
                    <a class="small  text-break" href="../view/signup.php">Dont have an account | Create Now</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>