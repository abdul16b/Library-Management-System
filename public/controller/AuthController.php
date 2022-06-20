<?php
session_start();
include "../database/Connection.php";

class Authentication extends Database
{

    public function userLogin($email, $password)
    {
        $password = md5($password);
        $result = mysqli_query($this->connect(), "SELECT * FROM users WHERE email='" . $email . "' and password = '" . $password . "'");
        $row  = mysqli_fetch_array($result);
        if (is_array($row)) {
            if($row['status'] == 0){
                return 3;
            }else{
                $_SESSION['id'] = $row['userID'];
                $_SESSION['type'] = $row['type'];
            }
           return 1;
        } else {
           return 0;
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location:../../index.php');
    }
}
