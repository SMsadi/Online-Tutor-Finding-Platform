<?php
    require_once('db.php');

    function getAllJobs($uid, $nameike){
        $con = dbConnection();
        $sql = "SELECT * FROM Jobs WHERE Title like '%{$nameike}%' and JobID NOT IN (SELECT JobID FROM JobApplications WHERE UserID = '$uid');";
        
        if($result = mysqli_query($con, $sql)){
            $jobs = [];
            while($row=mysqli_fetch_assoc($result)){
                array_push($jobs, $row);
            }
            return $jobs;
        }
        return false;
    }
