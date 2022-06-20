
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Manage Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../includes/link.php" ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">

  <link rel="stylesheet" href="../../src/css/user-account.css">
  <link rel="stylesheet" href="../../src/css/book-index-nav.css">
  <link rel="stylesheet" href="../../src/css/admin-dashboard.css">
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" class="bg-header" viewBox="0 0 1440 320">
    <path fill="#0099ff" fill-opacity="1" d="M0,256L60,229.3C120,203,240,149,360,138.7C480,128,600,160,720,165.3C840,171,960,149,1080,117.3C1200,85,1320,43,1380,21.3L1440,0L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
  </svg>

  <?php include '../includes/header.php';
   $countBorrowed = $controller->getDataBy($user['USCID']);
   $notreturned=$controller->countNotReturn($user['USCID']);
  ?>


  <div class="container manage-account">


    <div class="page mt-4 manage-account-page">
      <div class="mt-2">
        <h4 class="mb-4">Account Library</h4>
        <div class="row">
          
          <div class="col-lg-12">
            <div class="card border-0 mb-4 temporary-box-shadow">
              <div class="card-body">
                <h6 class="card-title font-weight-bold mt-2">Actions</h6>
                <p class="text-secondary mb-4">Books that you borrowed, returned and not return. Also include you fine. </p>
                <!-- <p>Account Number: 30056845</p> -->
               <div class="row">
               <div class="col-md-4 p-2">
                  <div class="card-counter info">
                    <i class="fa fa-book"></i>
                    <span class="count-numbers"><?= $countBorrowed ?></span>
                    <span class="count-name">Books Borrowed</span>
                  </div>
                </div>
                <div class="col-md-4 p-2">
                  <div class="card-counter danger">
                  <i class="fa fa-exclamation"></i>
                    <span class="count-numbers"><?= $notreturned ?></span>
                    <span class="count-name">Books Not Returned</span>
                  </div>
                </div>
               </div>
              </div>
              <div class="card-footer bg-white text-primary px-4 py-4"><a class="float-right" href="user-actions.php">Manage Books</a></div>
            </div>
          </div>

        </div>


      </div>
    </div>

  </div>
  <?php include "../includes/footer.php" ?>
</body>

</html>