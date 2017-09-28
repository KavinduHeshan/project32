<?php
include "db.php";


if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST["value"]=="1"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $passcheck=new db();
    $passcheck->setQuery('SELECT password from login  WHERE  Username="'.$username.'"');
    $hash=$passcheck->fetch();

  if (password_verify($password, $hash ["password"])) {
        echo 'Password is valid!';
        session_start();
        $_SESSION["username"]=$username;
    } else {
        echo 'Invalid username or  password.';
       // echo $hash["password"];
    }

}