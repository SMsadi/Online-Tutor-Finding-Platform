<?php
require_once ('db.php');
function addJobApplication($userId, $jobId)
{

    $con = dbConnection();
    $sql = "INSERT into jobapplications(UserID, JobID) values(
                                    '{$userId}',
                                    '{$jobId}')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        mysqli_error($con);
        return false;
    }
}

function getApplications($uid)
{
    $con = dbConnection();
    $sql = "SELECT * from jobapplications where UserID='{$uid}';";

    if ($result = mysqli_query($con, $sql)) {
        $app = array();
        while ($ap = mysqli_fetch_assoc($result)) {
            array_push($app, $ap);
        }
        return $app;
    }
    return false;
}

function updateApplicaiton($appid,$status){
    $con = dbConnection();
    $sql = "UPDATE jobapplications SET 
                            Status='{$status}'
                            WHERE ApplicationID='{$appid}'";

    if(mysqli_query($con, $sql)){
        return true;
    }else {
        mysqli_error($con);
        return false;
    }
}

?>