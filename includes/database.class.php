<?php

class database
{
    public static $conn = null;
    public static function getConnection()
    {
        if (database::$conn == null) {
            $servername = "mysql.selfmade.ninja";
            $username = "Kamalesh";
            $password = "20122002";
            $dbname = "Kamalesh_photogram";

            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            //echo "In db class";
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }
            //establishing new connnection..
            else {
                echo "new connection";
                //replacing null with actual connection
                database::$conn = $connection;
                return database::$conn;
            }
        } else {
            //returni existing connection
            echo "returning";
            return database::$conn;
        }
    }
}
