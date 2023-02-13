<?php
session_start();
include "../../model/pdo.php";
include "../../model/account.php";

if (isset($_POST['login'])  && ($_POST['login'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $_SESSION['login'] = $_POST['login'];
  
    $checkUser =  checkUser($name, $pass);

    if (is_array($checkUser)) {
        $_SESSION['user'] = $checkUser;
      


        header("Location: ../../index.php?header=sign_in");
    } else {
        $notify = "Your name or password is wrong .Please sign in again";
        header("Location: login.php?notify=$notify");
    }
}

