<?php
require('validation.php');
require('../model/user-model.php');
if (isset($_POST['signup'])) {
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $user_type = $_POST["user_type"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    if(!(
        isValidEmail($email) && isValidName($name) && isValidUsername($username)
    )) {
        header('location: ../view/sign-up.php?err=invalid');
        exit();
    }

    if($password !== $confirm_password) {
        header('location: ../view/sign-up.php?err=password-missmatch');
        exit();
    }

    $status = addUser($username, $name, $email, $country, $gender, $phone, $password, $user_type);
    if($status){
        header('location: ../view/sign-in.php?err=created');
        exit();
    }
    else {
        header('location: ../view/sign-up.php?ff=failed');
    }


} else {
    
    header('location: ../view/sign-up.php?err=invalid');
}

?>
