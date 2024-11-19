<?php
session_start();
require ('../model/batch-model.php');
if(!isset($_GET['namelike'])) $_GET['namelike'] = '';
$batches = getAllBatches($_GET['namelike']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batch List</title>
    <link rel="stylesheet" href="css/styles.css">
    </link>
</head>

<body>
    <?php require('logout.html') ?>
    <center>
        <h2>Batch List</h2>
        <form action="#" method="GET">
            <label for="search_query">Search:</label>
            <input type="text" id="searchinput" name="namelike" placeholder="Enter batch name"
                value="<?=$_GET['namelike']?>">
            <input type="submit" value="Search">
        </form>
        <br>
        <br>
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>BatchID</th>
                    <th>BatchName</th>
                    <th>CourseID</th>
                    <th>TutorID</th>
                    <th>StartDate</th>
                    <th>EndDate</th>
                    <th>Capacity</th>
                    <th>Status</th>
                    <?php if ($_SESSION['user']['user_type'] == 'admin')
                        echo '<th>Action</th>' ?>
                </tr>
            </thead>
            <tbody>

                <?php
                    foreach ($batches as $batch) {
                        ?>
                <tr>
                    <td>
                        <?= $batch['BatchID'] ?>
                    </td>
                    <td>
                        <?= $batch['BatchName'] ?>
                    </td>
                    <td>
                        <?= $batch['CourseID'] ?>
                    </td>
                    <td>
                        <?= $batch['TutorID'] ?>
                    </td>
                    <td>
                        <?= $batch['StartDate'] ?>
                    </td>
                    <td>
                        <?= $batch['EndDate'] ?>
                    </td>
                    <td>
                        <?= $batch['Capacity'] ?>
                    </td>
                    <td>
                        <?= $batch['Status'] ?>
                    </td>
                    <?php if ($_SESSION['user']['user_type'] == 'admin')
                            echo '<td><a href="manage-batch.php?id=' . $batch["BatchID"] . '">Manage</a></td>' ?>

                </tr>
                <?php
                    }
                    ?>

            </tbody>
        </table>
        <br><br><br><button onclick="history.back ()">Back</button>
    </center>
</body>

</html>