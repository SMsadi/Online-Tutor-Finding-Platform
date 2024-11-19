<?php
    session_start();
    require_once('../model/user-model.php');
    require_once('validation.php');

     if(!isset($_POST['signin'])) {header('location: ../view/sign-in.php'); exit();}

     $username = $_POST['username'];
     $password = $_POST['password'];
     
     if(empty($username) or empty($password)){
         header('location: ../view/sign-in.php?err=empty');
         exit();
     }

    if(!(isValidUsername($username) && isValidPassword($password))) {
        header('location: ../view/sign-in.php?err=invalid');
        exit();
    }


    $status = login($username, $password);

     if($status){

        setcookie('logged_in', true, time()+10000000000, '/');
        setcookie('username', $username, time()+10000000000, '/');
        $_SESSION['user'] = getUser($username);

        if($_SESSION['user']['user_type'] == 'admin') {
            header('location: ../view/admin-dashboard.php');
            exit();
        }
        else if($_SESSION['user']['user_type'] == 'student') {
            header('location: ../view/student-dashboard.php');
            exit();
        }
        if($_SESSION['user']['user_type'] == 'tutor') {
            header('location: ../view/tutor-dashboard.php');
            exit();
        }

     }
     else header('location: ../view/sign-in.php?err=mismatch');

?>