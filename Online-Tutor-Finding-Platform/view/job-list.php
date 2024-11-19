<?php
session_start();
require ('../model/job-model.php');
if(!isset($_GET['namelike'])) $_GET['namelike'] = '';
$jobs = getAllJobs($_SESSION['user']['id'], $_GET['namelike']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
    <link rel="stylesheet" href="css/styles.css">
    </link>
</head>

<body>
    <?php require('logout.html') ?>
    <center>
        <h2>Job List</h2>
        <form action="#" method="GET">
            <label for="search_query">Search:</label>
            <input type="text" id="" name="namelike" placeholder="Enter batch name" value="<?=$_GET['namelike']?>">
            <input type="submit" value="Search">
        </form>
        <br>
        <br>
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>JobID</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Time Duration (Month)</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($jobs as $job) {
                    ?>
                <tr>
                    <td>
                        <?= $job['JobID'] ?>
                    </td>
                    <td>
                        <?= $job['Title'] ?>
                    </td>
                    <td>
                        <?= $job['Location'] ?>
                    </td>
                    <td>
                        <?= $job['TimeDuration'] ?>
                    </td>
                    <td>
                        <?= $job['Salary'] ?>
                    </td>
                    <td>
                        <form action="../controller/apply-job-process.php" method="post">
                            <input type="submit" value='Apply' name="apply">
                            <input type="hidden" name="id" value="<?= $job['JobID'] ?>">
                        </form>
                    </td>

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