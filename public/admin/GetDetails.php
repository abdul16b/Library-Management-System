<?php
$conn = new mysqli("localhost", "root", "", "usc_library");

// get student details
if (!empty($_POST["studentid"])) {
    $studentid = $_POST["studentid"];
    $sql = "SELECT username,status FROM users WHERE USCID=$studentid";


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['status'] == 0) {
                echo "<span style='color:red'> Student ID Blocked </span>" . "<br />";
                echo "<b>Student Name-</b>" . $result->FullName;
                echo "<script>$('#submit').prop('disabled',true);</script>";
            } else {
?>


            <?php
                echo htmlentities($row['username']);
                echo "<script>$('#submit').prop('disabled',false);</script>";
            }
        }
    } else {

        echo "<span style='color:red'> Invaid Student Id. Please Enter Valid Student id .</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    }
}
// end student details

// get book details
if (!empty($_POST["bookid"])) {
    $bookid = $_POST["bookid"];
    $sql = "SELECT bookName,bookID FROM books WHERE ISBN=$bookid";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <option value="<?php echo htmlentities($row['bookID']); ?>"><?php echo htmlentities($row['bookName']); ?></option>
            <b>Book Name :</b>
        <?php
            echo htmlentities($result->BookName);
            echo "<script>$('#submit').prop('disabled',false);</script>";
        }
    } else { ?>

        <option class="others"> Invalid ISBN Number</option>
<?php
        echo "<script>$('#submit').prop('disabled',true);</script>";
    }
}
// end get book details


?>