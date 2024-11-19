<?php
session_start();
require ('../model/jobapp-model.php');
$apps = getApplications($_SESSION['user']['id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
    <link rel="stylesheet" href="css/bakishob.css" />
</head>

<body>
    <?php require('logout.html') ?>
    <center>
        <h2>Job List</h2>
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>AppID</th>
                    <th>UserID</th>
                    <th>JobID</th>
                    <th>Application Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($apps as $app) {
                    ?>
                <tr>
                    <td>
                        <?= $app['ApplicationID'] ?>
                    </td>
                    <td>
                        <?= $app['UserID'] ?>
                    </td>
                    <td>
                        <?= $app['JobID'] ?>
                    </td>
                    <td>
                        <?= $app['ApplicationDate'] ?>
                    </td>
                    <td>
                        <?= $app['Status'] ?>
                    </td>
                    <?php
                            if($app['Status'] == 'Pending'){
                                ?>
                    <td>
                        <form action="../controller/apply-job-process.php" method="post">
                            <input type="submit" value='Cancel' name="cancel">
                            <input type="hidden" name="id" value="<?= $app['ApplicationID'] ?>">
                        </form>
                    </td>
                    <?php
                            }
                        ?>

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