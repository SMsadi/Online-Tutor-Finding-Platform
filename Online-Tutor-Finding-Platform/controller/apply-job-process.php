<?php
session_start();
require ('../model/jobapp-model.php');
if (isset ($_POST['apply'])) {
    $job_id = $_POST['id'];
    addJobApplication($_SESSION['user']['id'], $job_id);
    header("Location: ../view/job-list.php");
    exit();

}
else if (isset ($_POST['cancel'])) {
    $app_id = $_POST['id'];
    updateApplicaiton($app_id,"Cancelled");
    header("Location: ../view/view-applied-job.php");
    exit();

}
else {
    header("Location: ../view/job-list.php");
}
?>