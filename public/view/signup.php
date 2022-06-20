<?php

include '../controller/StudentController.php';  

  $signup = new Students();
  if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $uscId = $_POST['uscId'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];
    $status = 1;
    $image = "https://thumbs.dreamstime.com/b/vector-icon-user-avatar-web-site-mobile-app-man-face-flat-style-social-network-profile-45836554.jpg";

    $exist = $signup->isUserExist($uscId);
    if($exist){
      echo "<script>alert('Please input Correct USD ID!')</script>";
    }else{
      if($password !== $password1){
        echo "<script>alert('Password is not Matched!')</script>";
      }else{
        $register = $signup->UserRegister($username, $email, $uscId, $password, $image, $status);
        if($register){
          echo "<script>alert('You may login now')</script>";
          header("Location: login.php");
        }else{
          echo "<script>alert('Error in creating account')</script>";
        }
      }
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>USC Library | Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../logo-brand.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../src/css/book-login.css">
  <script src="../../src/js/login.js"></script>
</head>

<body>

  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
               

                <h3 class="login-heading mb-4 ">Create Account and Start Learning Now</h3>
                <form method="POST">

                    <div class="field">
                      <input type="text" required  class="holder" name="username">
                      <label title="Full Name" data-title="Full Name"></label>
                  </div>
                  <div class="field">
                    <input type="text" required  class="holder num1" name="email">
                    <label title="Email" data-title="Email"></label>
                    </div>
                    <div class="field">
                      <input type="text" required  class="holder num1" id="idNumber" name="uscId">
                      <label title="USC ID Number" data-title="USC ID Number"></label>
                  </div>
                  <div class="field">
                    <input type="password" required  class="holder num1" id="password" name="password">
                    <label title="Password" data-title="Password"></label>
                  </div>
                  <div class="field">
                    <input type="password" required  class="holder num1" id="password1" name="password1">
                    <label title="Confirm Password" data-title="Confirm Password"></label>
                  </div>
                  <!-- <div class='alert alert-danger w-25' style="display:none;"  role='alert'>
                    Password is not matched!
                  </div> -->
                  <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" id="register" type="submit" name="register">Create Now</button>
                    <div class="text-center">
                      <!-- <a class="small" href="#">Forgot password?</a><br> -->
                      <a class="small  text-break" href="login.php">Already have an account | Login Now</a>
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