<?php
include "../../model/pdo.php";
include "../../model/account.php";


if(isset($_POST['sign-up'])){
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $pass = isset($_POST['password']) ? $_POST['password'] : 1;
    insert_user($email,$name,$pass );
    $notify = "Sign up successfully";
    header("location: login.php?notify=$notify");
}
else{
    echo "Loi";
}





?>