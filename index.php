<?php 
session_start();

if (isset($_SESSION['id'])) {
  header('Location:public/view/user-library.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="brand-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <?php include "public/includes/link.php"?>
  <link rel="stylesheet" href="src/css/book-index-nav.css">
  <link rel="stylesheet" href="src/css/wave.css">
  <script src="src/js/search.js"></script>
</head>
<style>
  .close {
    position: absolute;
    top: 25px;
    right: 25px;

    border: 1px solid #c0c9e2;
    border-radius: 50%;
    cursor: pointer;
  }
</style>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" class="bg-header" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L60,229.3C120,203,240,149,360,138.7C480,128,600,160,720,165.3C840,171,960,149,1080,117.3C1200,85,1320,43,1380,21.3L1440,0L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

  <nav class="navbar navbar-expand-lg  <?= isset($_GET['bookID']) ? "bg-primary" : "navbar-light" ?>">
    <h3 class="p-4"><a class="  brand" href="<?= $base_url ?>">Library Management </a></h3>
    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto  p-4 ">
           
            <a href="public/view/login.php" class=" not-loggedIn"><button class="btn ml-4 loginBtn">Login</button></a>

        </div>

    </div>

</nav>
  


  <section class="header-intro">
    <div class="container mt-4 ">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="(p-5)">
            <img class="img-fluid img-header"
              src="src/img/intro-header.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1 mt-4">
          <div class="header-display">
            <h2 class="display-4 title-header">For those about to learn</h2>
            <p class="lead">Visiting places in the world, getting a new job, or just looking for a way to practice your
              English - this is the perfect place for you.</p>
            <button class="btn signinBtn" onclick="window.location.href='public/view/signup.php'">Get Started</button>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- <br><br><br><br><br> -->
  <br>
  <section2 class=" ">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#E0EDFF" fill-opacity="1"
        d="M0,288L80,256C160,224,320,160,480,149.3C640,139,800,181,960,208C1120,235,1280,245,1360,250.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
      </path>
    </svg>
    <div class="container-fluid intro2 text-dark" style="background-color: #E0EDFF;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="">
              <img class="img-fluid img-header" src="src/img/intro.png" alt="Intro Image">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="header-display">
              <h2 class="display-4 title-header">Uncover Your Potential</h2>
              <p class="lead text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid,
                mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis
                recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#E0EDFF" fill-opacity="1"
        d="M0,96L120,85.3C240,75,480,53,720,64C960,75,1200,117,1320,138.7L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
      </path>
    </svg>
  </section2>
  </section2>

  <div class="jumbotron bg-transparent " style="margin-bottom: 50px;">
    <div class="container">
      <h3 class="abt-books">"Books give plenty of joy to students, and they learn
        a lot of things from books. They take them into a
        unique world of imagination and improve their
        standard of living. Books help to inspire students
        to do hard work with courage and hope."</h3>
    </div>

  </div>

 
<?php include 'public/includes/footer.php'?>
 
</body>

</html>
