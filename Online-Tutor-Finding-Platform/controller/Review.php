<?php

$teacher_name = $_POST['teacher_name'];
$subject = $_POST['subject'];
$review = $_POST['review'];

setcookie("teacher_name", $teacher_name, time() + (86400 * 30), "/"); 
setcookie("subject", $subject, time() + (86400 * 30), "/"); 

require_once "../model/db1.php";
$sql = "INSERT INTO review (teacher_name, subject, review) VALUES ( ?, ?, ? )";

$stmt= mysqli_stmt_init($conn);
        $prepare_Stmt=mysqli_stmt_prepare($stmt,$sql);
        
        if ($prepare_Stmt) {
           mysqli_stmt_bind_param($stmt,"sss",$teacher_name, $subject, $review);
           mysqli_stmt_execute($stmt);
           echo "New Progress Updated <br>";
           header("Location: ../view/DisplayReview.php");  
        }
        else{
            die("Something went wrong.");
        }
?>