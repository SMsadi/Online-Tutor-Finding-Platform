<?php

$name = $_POST['name'];
$address = $_POST['address'];

setcookie("student_name", $name, time() + (86400 * 30), "/");   
setcookie("subject", $address, time() + (86400 * 30), "/");   

require_once "../model/db1.php";
$sql = "INSERT INTO premium_membership (name, address) VALUES ( ? , ?)";

$stmt= mysqli_stmt_init($conn);
        $prepare_Stmt=mysqli_stmt_prepare($stmt,$sql);
        
        if ($prepare_Stmt) {
           mysqli_stmt_bind_param($stmt,"ss",$name,$address);
           mysqli_stmt_execute($stmt);
           echo "New Record Updated <br>";
           header("Location: ../view/display_premium_membership.php");  
        }
        else{
            die("Something went wrong.");
        }

?>