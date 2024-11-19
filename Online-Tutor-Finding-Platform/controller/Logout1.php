<?php
setcookie("student_name", "", time() - 3600, "/"); 
setcookie("subject", "", time() - 3600, "/");
header("Location: ../view/Home_Premium_Membership.php");
exit();
?>
