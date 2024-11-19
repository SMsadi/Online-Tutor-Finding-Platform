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
                    <a href="batch-list.php">
                        <button class="button-card">Manage Batch</button>
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
                    <a href="search-tutor.php">
                        <button class="button-card">Search Tutor</button>
                    </a>
                </td>
            </tr>

            <tr align="center">
                <td>
                    <a href="Home_Resource.php">
                        <button class="button-card">Store Books and Resources</button>
                    </a>
                </td>
            </tr>

        </table>
        <br><br><br><button class="button-back" onclick="history.back ()">Back</button>
    </center>

</body>

</html>