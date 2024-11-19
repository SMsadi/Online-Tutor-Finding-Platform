<?php
    require('../model/batch-model.php');
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $batch_name = $_POST['batch_name'];
    $course_id = $_POST['courseID'];
    $tutor_id = $_POST['tutor_id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $capacity = $_POST['capacity'];
    $status = $_POST['status'];

    if(updateBatch($id, $batch_name, $course_id, $tutor_id, $start_date, $end_date, $capacity, $status)) {
        header("Location: ../view/batch-list.php");
        exit();
    }
    else {
        header("Location: ../view/manage-batch.php?id=".$id);
        exit();
    }

} else {
    header("Location: ../view/batch-list.php");
}
?>
