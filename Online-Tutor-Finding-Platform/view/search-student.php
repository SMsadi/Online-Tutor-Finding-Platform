<?php
    require('../model/user-model.php');
    if(!isset($_GET['namelike'])) $_GET['namelike'] = '';
    $allUser = getAllStudent($_GET['namelike']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Students</title>
    <link rel="stylesheet" href="css/styles.css">
    </link>
</head>

<body>
    <?php require('logout.html') ?>
    <center>
        <h2>Search Students</h2>
        <form action="#" method="GET">
            <label for="search_query">Search:</label>
            <input type="text" id="" name="namelike" placeholder="Enter student name" value="<?=$_GET['namelike']?>">
            <input type="submit" value="Search">
        </form>
        <br>
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Country</th>
                    <th>Gender</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(sizeof($allUser) == 0) echo '<tr><td colspan="4" align="center">No User found</td></tr>';
                    else{
                        foreach($allUser as $user){
                            ?>
                <tr>
                    <td><?=$user['name']?></td>
                    <td><?=$user['country']?></td>
                    <td><?=$user['gender']?></td>
                    <td><?=$user['phone']?></td>
                </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
        <br><br><br><button onclick="history.back ()">Back</button>
    </center>
</body>

</html>