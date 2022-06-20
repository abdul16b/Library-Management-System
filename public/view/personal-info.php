<!DOCTYPE html>
<html lang="en">

<head>
  <title>Account Settings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="../../logo-brand.png" type="image/x-icon">
  <?php include "../includes/link.php" ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="../../src/css/personal-info.css">
  <link rel="stylesheet" href="../../src/css/book-index-nav.css">
  <link rel="stylesheet" href="../../src/css/book-login.css">
  <script src="../../src/js/user.js"></script>
  <script src="../../src/js/security.js"></script>
</head>
<style>
  .bg-header {
    position: absolute;
    z-index: 0;
  }

  a.brand {
    color: white;
    text-decoration: none;
    background-color: transparent;
  }
  input{
    cursor: default;
   
}
</style>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" class="bg-header" viewBox="0 0 1440 320">
    <path fill="#0099ff" fill-opacity="1" d="M0,256L60,229.3C120,203,240,149,360,138.7C480,128,600,160,720,165.3C840,171,960,149,1080,117.3C1200,85,1320,43,1380,21.3L1440,0L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
  </svg>

  <?php include "../includes/header.php" ?>

  <?php

  if (isset($_POST['up'])) {
    $img = $_POST['img'];
    $controller->updateImg($img);
  }

  if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $controller->updateData($username, $email);
    echo "<script>alert('Succesfully updated!')</script>";
    echo "<script>window.location.href='personal-info.php?personal'</script>";
  }

  if (isset($_POST['passwordBtn'])) {
    $oldpass = $_POST['oldpass'];
    $oldpass = md5($oldpass);
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if ($oldpass !== $user['password'] || $pass1 !== $pass2) {
      echo "<script>alert('You made a mistake!')</script>";
    } else {
      $controller->updatePassword($pass1);
      echo "<div class='alert alert-success' role='alert'>Password Successfully updated!<div>";
    }
  }
  ?>


  <!-- Register -->
  <div class="container register">

    <div class="row">

      <div class="col-md-3 register-left">
        <img src="https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-512.png" alt="" />
        <h3>Personal Information</h3>
        <p>Manage Your Personal Information Here</p>
        <button class="btn btn-info mb-4" style="border-radius: 25px;" data-toggle="modal" data-target="#changeProfile">Change Profile</button>
        <!-- <input type="submit" name="" value="Change Profile"/><br/> -->
      </div>

      <div class="col-md-9 register-right">
        <!-- <div class="container-fluid"> -->
        <div class="row register-heading">
          <div class="col-sm-6">
            <h3 class="register-heading">Account Settings</h3>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-info edit float-right">Edit Information</button>
          </div>
          <!-- </div> -->


        </div>


        <form method="POST" id="p-form">
          <div class="field mt-4">
            <label for="" class="ml-4 small">USC ID Number</label>
            <input type="text" class="holder usc_id" readonly value="<?php echo $user['USCID']; ?>">
            <!-- <label title="USC ID Number" data-title="USC ID Number"></label> -->

          </div>
          <div class="field mt-2">
            <label for="" class="ml-4 small">Username</label>
            <input type="text" name="username" required class="holder username" onfocus="this.setSelectionRange(this.value.length, this.value.length);" value="<?php echo $user['username']; ?>">
            <!-- <label title="Username" data-title="Username"></label> -->
          </div>
          <div class="field mt-2">
            <label for="" class="ml-4 mt-2 small">Email</label>
            <input type="text" name="email" required placeholder="Email" class="holder num1" value="<?php echo $user['email']; ?>">
            <!-- <label title="Email" data-title="Email"></label> -->
          </div>



          <button disabled class="btn btn-primary float-right btn-save mt-4 mb-4" type="submit" name="update">Save Changes</button>
        </form>

      </div>
    </div>
  </div>



  <!-- Password form -->
  <div class="container register-security">

    <div class="row">

      <div class="col-md-3 register-left">
        <img src="https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-512.png" alt="" />
        <h3>Personal Security</h3>
        <p>Manage Your Personal Security Here</p>
      </div>

      <div class="col-md-9 register-right">
        <!-- <div class="container-fluid"> -->
        <div class="row register-heading">
          <div class="col-sm-6">
            <h3 class="register-heading">Account Settings</h3>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-info change-pass float-right">Change Password</button>
          </div>
          <!-- </div> -->


        </div>




        <form method="POST" id="p-form">


          <div class="field mt-2">
            <label for="" class="ml-4 small old-pass">Password</label>
            <input type="password" name="oldpass" required class="holder password" value="Junmar Layaog">
            <!-- <label title="Username" data-title="Username"></label> -->
          </div>

          <div class="field  pass mt-2">
            <label for="" class="ml-4 mt-2 small ">New Password</label>
            <input type="password" name="pass1" required class="holder num1">

          </div>

          <div class="field pass mt-2">
            <label for="" class="ml-4 mt-2 small ">Confirm Password</label>
            <input type="password" name="pass2" required class="holder num1">

          </div>




          <button disabled name="passwordBtn" class="btn btn-primary float-right btn-change mt-4 mb-4" type="submit">Update Password</button>

        </form>

      </div>
    </div>
  </div>



  <div class="modal fade mx-auto" id="changeProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title float-left" id="myModalLabel">Change Profile Picture</h4>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleFormControlFile1">Paste URL...</label>
              <input type="text" name="img" class=" img form-control">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
              <button type="submit" name="up" id="up" class="btn btn-primary">Change Profile</button>
            </div>
          </form>
          <!-- <img src="" alt="" class="img-fluid preview"> -->
        </div>

      </div>
    </div>
  </div>

  </div>
  <?php include "../includes/footer.php"; ?>
</body>
<script>
  $(document).ready(function() {

    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
    $(".holder").prop('disabled', true)

    $(".edit").click(function() {
      $(".holder").prop('disabled', false)
      $('.username').focus()
    });

  

  });
</script>

</html>