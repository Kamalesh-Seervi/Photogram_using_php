<?php

require_once "database.class.php";
class User
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
        print "Function Entry";
        $pass=md5($pass);//not the best way
        // Create connection
        $conn = database::getConnection();
        var_dump($conn);
        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `ph`) VALUES ('$user','$pass','$email','$phone');";
        $error = false;
        if (mysqli_query($conn, $sql)) {
            echo "Okay";
            // if ($conn->query($sql) === true) {
            $error = false;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            $error = $conn->error;
        }
        return $error;
    }

    // $conn->close();


    public function __construct($username)
    {
        $this->conn = database::getConnection();
        $this->conn->query;
    }
    public function auth()
    {
    }
    public static function login($user, $pass)
    {
        $pass=md5($pass);
    }
    public function setBio()
    {
    }
    public function getBio()
    {
    }
    public function setAvatar()
    {
    }
    public function getAvatar()
    {
    }
}
