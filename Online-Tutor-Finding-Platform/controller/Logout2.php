<?php
setcookie("student_name", "", time() - 3600, "/"); 
setcookie("subject", "", time() - 3600, "/");
header("Location: ../view/Home_Progress_Tracking.php");
exit();
?>
