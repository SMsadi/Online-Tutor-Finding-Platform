<?php
    require_once('db.php');

    function getAllBatches($namelike){
        $con = dbConnection();
        $sql = "SELECT * from batches where BatchName like '%{$namelike}%'";
        
        if($result = mysqli_query($con, $sql)){
            $batches = [];
            while($row=mysqli_fetch_assoc($result)){
                array_push($batches, $row);
            }
            return $batches;
        }
        return false;
    }

    function getBatch($id){
        $con = dbConnection();
        $sql = "SELECT * from batches where BatchID='{$id}';";
        
        if($result = mysqli_query($con, $sql)){
            return mysqli_fetch_assoc($result);
        }
        return false;
    }

    function updateBatch($id, $batch_name, $course_id, $tutor_id, $start_date, $end_date, $capacity, $status){
        $con = dbConnection();
        $sql = "UPDATE batches SET 
                                BatchName='{$batch_name}',
                                CourseID='{$course_id}',
                                TutorID='{$tutor_id}',
                                StartDate='{$start_date}',
                                EndDate='{$end_date}',
                                Capacity='{$capacity}',
                                Status='{$status}'
                                WHERE BatchID='{$id}'";

        if(mysqli_query($con, $sql)){
            return true;
        }else {
            mysqli_error($con);
            return false;
        }
    }