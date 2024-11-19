<?php
    require_once('db.php');

    function login($username, $password){
        $con = dbConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function getUser($email_or_username){
        $con = dbConnection();
        $sql = "SELECT * from users where username='{$email_or_username}';";
        
        if($result = mysqli_query($con, $sql)){
            return mysqli_fetch_assoc($result);
        }
        return false;
    }

    function getAllUsers(){
        $con = dbConnection();
        $sql = "SELECT * from users;";
        
        if($result = mysqli_query($con, $sql)){
            $users = array();
            while($user = mysqli_fetch_assoc($result)){
                array_push($users, $user);
            }
            return $users;
        }
        return false;
    }

    function getAllStudent($namelike){
        $con = dbConnection();
        $sql = "SELECT * from users where user_type='student' and name like '%{$namelike}%';";
        
        if($result = mysqli_query($con, $sql)){
            $users = array();
            while($user = mysqli_fetch_assoc($result)){
                array_push($users, $user);
            }
            return $users;
        }
        return false;
    }
    function getAllTutor($namelike){
        $con = dbConnection();
        $sql = "SELECT * from users where user_type='tutor' and name like '%{$namelike}%';";
        
        if($result = mysqli_query($con, $sql)){
            $users = array();
            while($user = mysqli_fetch_assoc($result)){
                array_push($users, $user);
            }
            return $users;
        }
        return false;
    }

    function addUser($username, $name, $email, $country, $gender, $phone, $password, $user_type) {
        $con = dbConnection();
        $sql = "INSERT INTO users (id, username, name, email, country, gender, phone, password, user_type) 
                VALUES (NULL, '$username', '$name', '$email', '$country', '$gender', '$phone', '$password', '$user_type')";
        
        if(mysqli_query($con, $sql)){
            return true;
        } else {
            return false;
        }
    }

?>