<?php

include '../database/Connection.php';

class Students extends Database
{

    public function UserRegister($username, $email, $uscId, $password, $image, $status)
    {
        $password = md5($password);
        $sql = "INSERT INTO users(username, email, USCID, password, images, status,type) VALUES ('$username', '$email', '$uscId', '$password', '$image', '$status','0' )";
        $add = $this->connect()->query($sql);
        return $add;
    }

    public function details($qry)
    {
        $query = $this->connect()->query($qry);
        $row = $query->fetch_array();
        return $row;
    }

    

    public function updateData($username, $email){
        $sql = "UPDATE users SET username = '".$username."', email= '".$email."' WHERE userID = '".$_SESSION['id']."'";
        $this->connect()->query($sql);
    }

    public function updatePassword($password){
        $password = md5($password);
        $sql = "UPDATE users SET password = '".$password."' WHERE userID = '".$_SESSION['id']."'";
        $this->connect()->query($sql);
    }
    public function updateImg($img)
    {
        $sql = "UPDATE users SET images = '" . $img . "' WHERE userID = '" . $_SESSION['id'] . "'";
        $newImg = $this->connect()->query($sql);
        if($newImg){
            return true;
        }
    }

    public function isUserExist($uscId)
    {
        $conn = $this->connect();
        $qr = mysqli_query($conn, "SELECT * FROM users WHERE USCID = '" . $uscId . "'");
        $row = mysqli_num_rows($qr);
        if ($row > 0) {
            return true;
        } else {
            return false;
        }
    }
}
