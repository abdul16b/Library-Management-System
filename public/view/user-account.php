

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Manage Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../logo-brand.png" type="image/x-icon">
  <?php include "../includes/link.php" ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../../src/css/user-account.css">
  <link rel="stylesheet" href="../../src/css/book-index-nav.css">
</head>

<body>
  <!-- <div class="svg-header"> -->
  <!-- <img src="../../src/img/wave1.svg" class="bg-header" alt=""> -->
  <svg xmlns="http://www.w3.org/2000/svg" class="bg-header" viewBox="0 0 1440 320">
    <path fill="#0099ff" fill-opacity="1" d="M0,256L60,229.3C120,203,240,149,360,138.7C480,128,600,160,720,165.3C840,171,960,149,1080,117.3C1200,85,1320,43,1380,21.3L1440,0L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
  </svg>

<?php include "../includes/header.php"?>


  <div class="container manage-account">


    <div class="page manage-account-page">
      <div class="">
        <h4 class="mb-4">Manage Account</h4>
        <div class="row">
          <div class="col-lg-12">
            <div class="card border-0 mb-4 temporary-box-shadow">
              <div class="card-body">
                <h6 class="card-title font-weight-bold mt-2">Personal Information</h6>
                <p class="text-secondary mb-4">Basic info, like your name and email address,security, that you use on USC Library Management</p>
                <p>USC ID Number:  <span class="font-weight-bold"><?=$user['USCID']?></span></p>
                <p>Email: <span class="font-weight-bold"> <?=$user['email']?></span></p>
              </div>
              <div class="card-footer bg-white text-primary px-4 py-4 p-info"><a href="../view/personal-info.php?personal">Manage your personal info</a></div>
            </div>
          </div>

          <!-- <div class="col-lg-12">
            <div class="card border-0 mb-4 temporary-box-shadow">
              <div class="card-body">
                <h6 class="card-title font-weight-bold mt-2">Security</h6>
                <p class="text-secondary mb-4">Basic Security, Including your password Settings, reset password</p>
              
              </div>
              <div class="card-footer bg-white text-primary px-4 py-4"><a href="../html/personal-security.html">Manage your Security</a></div>
            </div>
          </div> -->

        </div>


      </div>
    </div>

  </div>

 <?php include "../includes/footer.php"?>

</body>

</html>