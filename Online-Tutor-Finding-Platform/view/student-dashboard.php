<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Dashboard</title>
    <link rel="stylesheet" href="css/dashboard-styles.css" />
    <link rel="stylesheet" href="css/panels.css">

</head>

<body>
    <?php require('logout.html') ?>
    <center>
        <h2>Welcome, <?= $_SESSION['user']['name'] ?></h2>
        <table cellpadding="5">
            <tr align="center">
                <td>
                    <a href="#">
                        <button>My Batches</button>
                    </a>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="selectCourses.php">
                        <button>Select Course</button>
                    </a>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="batch-list.php">
                        <button>Batch List</button>
                    </a>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="search-tutor.php">
                        <button>Search Tutor</button>
                    </a>
                </td>
            </tr>

            <tr align="center">
                <td>
                    <a href="payment.php">
                        <button>Payment</button>
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
                    <a href="DisplayProgress.php">
                        <button>Student Progress Tracking</button>
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

            <tr align="center">
                <td>
                    <a href="Home_Review.php">
                        <button>Teacher Review & Rating</button>
                    </a>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="Home_Review.php">
                        <button>Teacher Review & Rating</button>
                    </a>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <a href="index.php">
                        <button>Keep Notes</button>
                    </a>
                </td>
            </tr>

        </table>
        <br><br><br><button onclick="history.back ()">Back</button>
    </center>
</body>

</html>