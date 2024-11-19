<?php
setcookie("student_name", "", time() - 3600, "/"); 
setcookie("subject", "", time() - 3600, "/");
header("Location: ../homepage.php");
exit();
?>
