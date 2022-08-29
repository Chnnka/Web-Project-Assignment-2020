<?php
//session_start();
class config{
    public static function connect()
    {
        $host="localhost";
        $username="root";
        $password="";
        $dbname="artsell_db";

        try
        {
            $con= new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        }
        catch(PDOException $e)
        {
            echo "Connection Failed" . $e->getMessage();
        }
        return $con;
    }
}
?>