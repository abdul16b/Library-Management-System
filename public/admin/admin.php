<?php
session_start();
include "../controller/BookController.php";
$books = new Book();
$category = $books->getAllData(null, "category");
$countCategory = $books->getAllData("count", "category");
$countBook = $books->getAllData("count", "books");
$countUsers = $books->getAllData("count", "users");
$students = $books->getAllStudents(null);
$manageissued = $books->manageUserBooksAdmin();
$countReturnedBook = $books->countBook(1);
$countNotReturnedBook = $books->countBook(0);
$countAllIssued = $books->countIssuedBook();

$user = $books->details("select * from users where userID='" . $_SESSION['id'] . "'")



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "../includes/link.php" ?>

  <link href='https://css.gg/arrows-exchange-v.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../src/css/admin-page.css">
  <script src="../../src/js/admin.js"></script>
  <link href='https://css.gg/log-off.css' rel='stylesheet'>
  <link href='https://css.gg/menu-motion.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../src/css/admin-dashboard.css">
  <title>Admin-Page</title>
</head>
<style>
  .others {
    color: red;
  }
</style>

<?php

if (isset($_SESSION['msg'])) {
  echo "<script>alert('" . $_SESSION['msg'] . "');</script>";
  unset($_SESSION['msg']);
}
?>
<body>
  <div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>Admin Panel</h3>
      </div>


      <div class="sidecontent">
        <ul class="list-unstyled components">
          <li class=" menus  dashboard sub-active "><a href="#"><i class="fa fa-dashcube m-2"></i>Dashboard</a></li>
          <li class="btnManageStudent menus"><a><i class="fa fa-users m-2"></i>Manage Students</a></li>
          <li class=" ">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-book m-2"></i>Books<i class="fa fa-exchange  float-right m-2"></i></a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li class=".sub-active menus   view-all-books"><a href="#">Manage Books</a></li>
              <li class="btnAdd menus"><a class="add">Add Book</a></li>
            </ul>
          </li>

          <li class="">
            <a href="#issueBook" data-toggle="collapse" aria-expanded="false"><i class="fa fa-check-square-o m-2"></i>Issue Books<i class="fa fa-exchange m-2 float-right"></i></a>
            <ul class="collapse list-unstyled" id="issueBook">
              <li class="btnManageIssuedBook menus"><a href="#">Manage Issued Books</a></li>
              <li class="btnIssue menus"><a>Issue Book</a></li>
            </ul>
          </li>




          <li class="">
            <a href="#categoryMenu" data-toggle="collapse" aria-expanded="false"><i class="fa fa-th-large m-2"></i>Categories<i class="fa fa-exchange m-2 float-right"></i></a>
            <ul class="collapse list-unstyled" id="categoryMenu">
              <li class="btncategory menus"><a>Manage Category</a></li>
              <li class=" btnAddCategory menus"><a>Add Category</a></li>
            </ul>
          </li>





          <ul class="list-unstyled CTAs">
            <li> <a class="article">Login as <?=$user['username']?></a></li>
          </ul>
        </ul>
      </div>
    </nav>

    <div id="content" class="w-100">


      <nav class="navbar navbar-default ">
        <div class="container-fluid">

          <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="btn btn-head navbar-btn">
              <i class="gg-menu-motion "></i>
              <span>USC Library Management</span>
            </button>
          </div>

          <a href="../controller/logout.php" class="btn btn-warning " type="button" id="dropdownMenu2" aria-expanded="false">
            Logout</a>

        </div>
      </nav>

      <!-- INCLUDES VIEWS -->

      <div id="dashboard" class="global-container content">
        <?php include "view/Dashboard.php" ?>
      </div>

      <div class="global-container content " id="view_books" style="display: none;transition: 0.5s;">
        <?php include "view/ManageBook.php" ?>
      </div>

      <div class="global-container container justify-content-center mx-auto content" id="addBook" style="display: none;transition: 0.5s;">
        <?php include "view/AddBook.php" ?>
      </div>

      <div class="global-container container justify-content-center mx-auto content" id="AddCategory" style="display: none;transition: 0.5s;">
        <?php include "view/AddCategory.php" ?>
      </div>

      <div class="container-fluid content justify-content-center" id="manageCategory" style="display: none;transition: 0.5s;">
        <?php include "view/ManageCategory.php" ?>
      </div>

      <div class="global-container container  content" id="ManageIssuedBook" style="display: none;transition: 0.5s;">
        <?php include "view/ManageIssuedBook.php" ?>
      </div>

      <div class="global-container container content" id="ManageStudent" style="display: none;transition: 0.5s;">
        <?php include "view/ManageStudent.php" ?>
      </div>

      <div id="dashboard1" class="w-100 content" style="display: none;transition: 0.5s;">
        <?php include "view/IssueBook.php" ?>
      </div>
      <!-- END INCLUDES VIEWS -->

    </div>
  </div>
  <script>
    $(document).ready(function() {

      $('#manage-category').DataTable();
      $('#manage-students-table').DataTable();
      $('#manage-book-table').DataTable();



      // function for get student name
      window.getstudent = function() {
        jQuery.ajax({
          url: "GetDetails.php",
          data: 'studentid=' + $("#studentid").val(),
          type: "POST",
          success: function(data) {
            $("#get_student_name").html(data);
          },
          error: function() {}
        });
      }

      //function for book details
      window.getbook = function() {
        jQuery.ajax({
          url: "GetDetails.php",
          data: 'bookid=' + $("#bookid").val(),
          type: "POST",
          success: function(data) {
            $("#get_book_name").html(data);
          },
          error: function() {}
        });
      }


      $(document).on("click", ".editBook", function() {
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        $('#update_id').val(data[0]);
        $('#bookTitle').val(data[1]);
        $('#bookDescription').val(data[2]);
        $('#bookCover').val(data[3]);
        $('#author').val(data[4]);
        $(`.modal-content option[value=${data[5]}]`).attr('selected', 'selected');
        $('#category').val(data[5]);
        $('#ISBN').val(data[6]);
        $('#editBook').modal('show');
      })


      $(document).on("click", ".editIssued", function() {
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();
        $('#issuedID').val(data[0])
        $('#issueStudName').html(data[1])
        $('.issueBookName').html(data[2])
        $('.issueISBN').html(data[3])
        $('.issueDate').html(data[4])
        $('.issueDueDate').html(data[5])
        $('.issueReturnedDate').html(data[6])
        $('#issueFine').val(data[8])
        if (data[7] == 0) {
          $("#issueFine").prop('disabled', false);
          $('#submitReturn').show();
        } else {
          $("#issueFine").prop('disabled', true);
          $('#submitReturn').hide();
        }
        $('#issueBookModal').modal('show');
      })


      $("#sidebarCollapse").on("click", function() {
        $("#sidebar").toggleClass("active");
        $(this).toggleClass("active");
      });

      $(document).on("click", ".editCategory", function() {
        $('#catID').val($(this).data('id'));
        $('#catName').val($(this).data('name'));
        $('#catDescription').val($(this).data('description'));
        $('#catCover').val($(this).data('cover'));
        $("#editCategory").modal("show");
      });

      $(document).on("click", ".statusCategory", function() {
        $('#statusID').val($(this).data('id'));
        $('#catStatus').val($(this).data('status'));
        $("#statusCategory").modal("show");
      });

      $(document).on("click", ".statusStudent", function() {
        $('#userID').val($(this).data('id'));
        $('#userStatus').val($(this).data('status'));
        $("#statusStudent").modal("show");
      });

      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }

      $('.menus').click(function() {
        var tmp = $(this);
        $(".menus").removeClass("sub-active");
        if ($(tmp).is('.menus')) {
          $(tmp).addClass("sub-active");
        }
      });

      $(".view-all-books").click(function() {
        $(".content").hide();
        $("#view_books").show()

      })

      $(".btnAdd").click(function() {
        $(".content").hide()
        $("#addBook").show();
      })

      $(".btnBookIssue").click(function() {
        alert("gane")
        $(".content").hide();
        $("#issuing").show()
      })

      $(".btncategory").on('click', function() {

        $(".content").hide();
        $("#manageCategory").show()
      })

      $(".btnAddCategory").click(function() {
        $(".content").hide();
        $("#AddCategory").show()
      })

      $(".btnManageStudent").click(function() {
        $(".content").hide();
        $("#ManageStudent").show()
      })



      $(".btnManageIssuedBook").click(function() {
        $(".content").hide();
        $("#ManageIssuedBook").show()
      })

      $('.dashboard').click(() => {
        $(".content").hide();
        $("#dashboard").show()
      })

      $('.btnIssue').click(() => {
        $(".content").hide();
        $("#dashboard1").show()
      })

      $("#sidebarCollapse").on("click", function() {
        $("#sidebar").toggleClass("active");
        $(this).toggleClass("active");
      });



    });
  </script>
</body>

</html>