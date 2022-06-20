<?php
session_start();
include "../controller/BookController.php";
if (isset($_SESSION['id'])) {
    $controller = new Book();
    $user = $controller->details("select * from users where userID='" . $_SESSION['id'] . "'");

}else{
    header("Location:login.php");
}

?>

<style>
     
    .active {
        font-weight: bold;
        border-bottom: white 2px solid;
        height: 40px;
    }

    .not-loggedIn {
        display: <?= isset($_SESSION['id']) ? "none" : "block" ?>;
    }

    .loggedIn {
        display: <?= isset($_SESSION['id']) ? "block" : "none" ?>;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light">
    <h3 class="p-4"><a class="  brand" href="<?= $base_url ?>">Library Management </a></h3>
    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto  p-4 ">
           
            <a class="nav-item nav-link  ml-4   loggedIn" href="user-library.php">Dashboard </a>
            <div class="dropdown loggedIn">
                <button class="btn btn- dropdown-toggle un-shadow" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img onerror="this.onerror=null;this.src='https://thumbs.dreamstime.com/b/vector-icon-user-avatar-web-site-mobile-app-man-face-flat-style-social-network-profile-45836554.jpg';" src="<?=$user['images']?>" class="avatar rounded-circle" style="width: 35px;" alt="Avatar"> <?= $user['username'] ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="z-index: 1;">
                    <div class="account-info-header border-bottom">
                        <p class="my-0 pl-3 pb-2 text-secondary"><small>USC ID: <?= $user['USCID'] ?></small></p>
                    </div>
                    <a href="user-account.php" class="dropdown-item "><i class="fa fa-user-o m-2"></i> Account</a></a>
                    <a href="../controller/logout.php" class="dropdown-item text-danger"><i class="fa fa-sign-out m-2"></i> Logout</a></a>
                </div>
            </div>
            <a href="<?= $base_url ?>public/view/login.php" class=" not-loggedIn"><button class="btn ml-4 loginBtn">Login</button></a>

        </div>
    </div>
</nav>
