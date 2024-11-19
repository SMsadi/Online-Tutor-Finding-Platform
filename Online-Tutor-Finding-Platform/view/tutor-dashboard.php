<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Dashboard</title>
    <link rel="stylesheet" href="css/dashboard-styles.css">
    <link rel="stylesheet" href="css/panels.css">

</head>

<body>
    <?php require('logout.html') ?>
    <center>
        <h2>Welcome, <?= $_SESSION['user']['name'] ?></h2>
        <table cellpadding="5">
            <tr align="center">
                <td>
                    <a href="job-list.php">
                        <button class="button-card">Job List</button>
                    </a>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="view-applied-job.php">
                        <button class="button-card">Applied Job List</button>
                    </a>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="batch-list.php">
                        <button class="button-card">Batch List</button>
                    </a>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="search-student.php">
                        <button class="button-card">Search Student</button>
                    </a>
                </td>
            </tr>

            <tr align="center">
                <td>
                    <a href="Home_Premium_Membership.php">
                        <button>Premium Membership</button>
                    </a>
                </td>
            </tr>
            
            <tr align="center">
                <td>
                    <a href="DisplayReview.php">
                        <button class="button-card">Teacher Review & Rating</button>
                    </a>
                </td>
            </tr>

            <tr align="center">
                <td>
                    <a href="Home_Progress_Tracking.php">
                        <button class="button-card">Student Progress Tracking</button>
                    </a>
                </td>
            </tr>

            <tr align="center">
                <td>
                    <a href="display_resource.php">
                        <button>Resource & Library</button>
                    </a>
                </td>
            </tr>


        </table>
        <br><br><br><button class="button-back" onclick="history.back ()">Back</button>
    </center>
</body>

</html>