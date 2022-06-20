<?php
class Database
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect()
    {
        // $this->servername = "remotemysql.com:3306";
        // $this->username = "XtL2RNjDqJ";
        // $this->password = "cmM5Ic9Vnq";
        // $this->dbname = "XtL2RNjDqJ";
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "usc_library";

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $conn;
    }

    
}
