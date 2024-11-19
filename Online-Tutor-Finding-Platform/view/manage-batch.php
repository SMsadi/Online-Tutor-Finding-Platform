<?php

require ('../model/batch-model.php');
require ('../model/user-model.php');
$batch = getBatch($_GET['id']);
$allusers = getAllUsers();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batch Update</title>
    <link rel="stylesheet" href="css/styles.css">
    </link>
</head>

<body>
    <?php require ('logout.html') ?>
    <center>
        <h2>Batch Update</h2>
        <table>
            <tr>
                <td>
                    <form action="../controller/update-batch-controller.php" method="post">
                        <input type="hidden" name="id" value="<?= $batch['BatchID'] ?>">
                </td>
            </tr>
            <tr>
                <td><label for="batch_name">Batch Name:</label></td>
                <td><input type="text" id="batch_name" name="batch_name" value="<?= $batch['BatchName'] ?>" required>
                </td>
            </tr>
            <tr>
                <td><label for="courseID">Course ID:</label></td>
                <td><input type="text" id="courseID" name="courseID" value="<?= $batch['CourseID'] ?>" required></td>
            </tr>
            <tr>
                <td><label for="tutor_id">Tutor ID:</label></td>
                <td><select id="tutor_id" name="tutor_id" value="<?= $batch['TutorID'] ?>" required>
                        <?php
                        foreach ($allusers as $user) {
                            if ($user['id'] === $batch['TutorID'])
                                $select = 'selected';
                            else
                                $select = '';
                            if ($user['user_type'] == 'tutor')
                                echo '<option value="' . $user['id'] . '"' . $select . '>' . $user['id'] . '-' . $user['name'] . '</option>';
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label for="start_date">Start Date:</label></td>
                <td><input type="date" id="start_date" name="start_date" value="<?= $batch['StartDate'] ?>" required>
                </td>
            </tr>
            <tr>
                <td><label for="end_date">End Date:</label></td>
                <td><input type="date" id="end_date" name="end_date" value="<?= $batch['EndDate'] ?>" required></td>
            </tr>
            <tr>
                <td><label for="capacity">Capacity:</label></td>
                <td><input type="number" id="capacity" name="capacity" value="<?= $batch['Capacity'] ?>" required></td>
            </tr>
            <tr>
                <td><label for="status">Status:</label></td>
                <td><select id="status" name="status" required>
                        <option value="active" <?php if ($batch['Status'] == 'active')
                            echo 'selected' ?>>Active</option>
                        <option value="inactive" <?php if ($batch['Status'] == 'inactive')
                            echo 'selected' ?>>Inactive
                        </option>
                    </select></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="update" value="Update Batch"></td>
            </tr>
            </form>
        </table>

        <br><br><br><button onclick="history.back ()">Back</button>
    </center>
</body>

</html>