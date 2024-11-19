<?php

$student_name = $_POST['student_name'];
$subject = $_POST['subject'];
$progress = $_POST['progress'];

setcookie("student_name", $student_name, time() + (86400 * 30), "/"); 
setcookie("subject", $subject, time() + (86400 * 30), "/"); 

require_once "../model/db1.php";
$sql = "INSERT INTO progress (student_name, subject, progress) VALUES ( ?, ?, ? )";

$stmt= mysqli_stmt_init($conn);
        $prepare_Stmt=mysqli_stmt_prepare($stmt,$sql);
        
        if ($prepare_Stmt) {
           mysqli_stmt_bind_param($stmt,"sss",$student_name, $subject, $progress);
           mysqli_stmt_execute($stmt);
           echo "New Progress Updated <br>";
           header("Location: ../view/DisplayProgress.php");  
        }
        else{
            die("Something went wrong.");
        }
?>