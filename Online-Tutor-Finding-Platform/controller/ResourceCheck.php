<?php
session_start();
$title = $_POST['title'];
$author=$_POST['author'];
$published_year=$_POST['published_year'];


setcookie("title", $title, time() + (86400 * 30), "/"); 
setcookie("author", $author, time() + (86400 * 30), "/"); 

require_once "../model/db1.php";
$sql = "INSERT INTO books (title,author,published_year) VALUES ( ? , ?, ?)";

$stmt= mysqli_stmt_init($conn);
        $prepare_Stmt=mysqli_stmt_prepare($stmt,$sql);
        
        if ($prepare_Stmt) {
           mysqli_stmt_bind_param($stmt,"sss",$title,$author,$published_year);
           mysqli_stmt_execute($stmt);
           echo "New Record Updated <br>";
           header("Location: ../view/display_resource.php");    
        }
        else{
            die("Something went wrong.");
        }

?>