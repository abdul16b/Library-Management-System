<?php
session_start();
$conn = new mysqli("localhost", "root", "", "usc_library");
$query = mysqli_query($conn, "SELECT  CURRENT_DATE + INTERVAL 10 DAY AS due_date;");
$row = $query->fetch_array();
$sql="insert into issuedBook (USCID,bookID,dueDate,status,fine) values('" . $_POST['studentid'] . "','" .  $_POST['bookdetails']  . "','" . $row['due_date'] . "','0','0')";

if ($conn->query($sql) === TRUE) {
   $_SESSION['msg'] ="Issued Successfully!";
   header('location: ../admin.php');
  } else {
     
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>