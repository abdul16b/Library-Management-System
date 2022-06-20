<?php
session_start();
$conn = new mysqli("localhost", "root", "", "usc_library");
$sql="update issuedBook set status='1', fine='".$_POST['issueFine']."' where issueBookID='" .$_POST['issuedID'] . "'";

if ($conn->query($sql) === TRUE) {
    $_SESSION['msg'] ="Return Successfully!";
   header('location: ../admin.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>