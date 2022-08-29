<?php
session_start();
include_once("config.php");
//------------------registration--------------------//
if (isset($_POST['register']))
{

    $con=config::connect();
    $email=sanitizeString($_POST['email']);
    $username=sanitizeString($_POST['username']);
    $password=sanitizePassword($_POST['password']);

    if ($username=="" || $email =="" || $password="") {
        return;
    }
    if(!checkEmailExist($con,$email)){
        return;
        echo "email alerady exst";
    }
    if(insertDetails($con,$email,$username,$password)){
        $_SESSION['email']=$email;
        header("Location:gallery.php");
    }
}
//---------------------login-------------------------//
if (isset($_POST['login']))
{
    $con=config::connect();
    $email=sanitizeString($_POST['email']);
    $password=sanitizePassword($_POST['password']);

    if ($email =="" || $password="") {
        return;
    }
    if(checkLogin($con,$email,$password)){
        $_SESSION['email']=$email;
        header("Location:gallery.php");
    }
    else{
        echo "The usesrname and pasword incorrect";
    }
}
function insertDetails($con,$email,$username,$password){
    $query=$con->prepare("INSERT INTO users(email,username,password) VALUES(:email,:username,:password)");
    $query->bindParam(":email",$email);
    $query->bindParam(":username",$username);
    $query->bindParam(":userPass",$password);
    
    return $query->execute();
}

function checkLogin($con,$email,$password){
    $query = $con->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
    $query->bindParam(":email",$email);
    $query->bindParam(":password",$password);
    $query->execute();
    //check
    if ($query->rowCount()==1) 
    {
        return true;
    }
    else{
        return false;
    }
}

function sanitizeString($string){
    $string=strip_tags($string);
    $string=str_replace(" ","",$string);
    return $string;
}
function sanitizePassword($string){
    $string=md5($string);
    return $string;
}

function checkEmailExist($con,$email){
    $query=$con->prepare("SELECT * FROM users WHERE email=:email");
    $query->bindParam(":email",$email);
    $query->execute();
}
?>