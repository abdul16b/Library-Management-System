<?php
session_start();
include "BookController.php";

$book = new Book();

if (isset($_POST['addCategory'])) {
    if ($book->addCategory($_POST['title'], $_POST['description'], $_POST['cover'])) {
        $_SESSION['msg'] = "Added Successfully!";
        header('location:../admin/admin.php');
    }
}

if (isset($_POST['updateCategory'])) {
    if ($book->updateCategory($_POST['id'], $_POST['title'], $_POST['description'], $_POST['cover'])) {
        $_SESSION['msg'] = "Update Successfully!";
        header('location:../admin/admin.php');
    }
}

if (isset($_POST['updateCategoryStatus'])) {
    if ($book->updateCategoryStatus($_POST['id'], $_POST['status'])) {
        $_SESSION['msg'] = "Update Status Successfully!";
        header('location:../admin/admin.php');
    }
}

if (isset($_POST['updateStudentStatus'])) {
    if ($book->updateStudentStatus($_POST['id'], $_POST['status'])) {
        $_SESSION['msg'] = "Update Status Successfully!";
        header('location:../admin/admin.php');
    }
}

if (isset($_POST['addbook'])) {
    $bookName = $_POST['bookTitle'];
    $bookDescription = $_POST['bookDescription'];
    $bookCover = $_POST['bookCover'];
    $author = $_POST['Author'];
    $category = $_POST['category'];
    $ISBN = $_POST['ISBN'];
    if ($book->addBook($bookName, $bookDescription, $bookCover, $author, $category, $ISBN)) {
        $_SESSION['msg'] = "Added Successfully!";
        header('location:../admin/admin.php');
    }
}

if (isset($_POST['updateBook'])) {
    $id = $_POST['update_id'];
    $bookTitle = $_POST['bookTitle'];
    $bookDescription = $_POST['bookDescription'];
    $bookCover = $_POST['bookCover'];
    $author = $_POST['Author'];
    $category = $_POST['category'];
    $ISBN = $_POST['ISBN'];
    if ($book->updateBook($bookTitle, $bookDescription, $bookCover, $author, $category, $ISBN, $id)) {
        $_SESSION['msg'] = "Update Successfully!";
        header('location:../admin/admin.php');
    }
}
