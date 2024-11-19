<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/premium.css">
    <link rel="stylesheet" href="css/background_image5.css">
    <title>Premium Membership Signup</title>
</head>
<body>

<h2><b>Premium Membership Subscription</b></h2>
<h3>Get our Premium Membership by Email and Address</h3>
<div class="container">
    <form id="premiumMembershipForm" action="../controller/PremiumMembership.php" method="post">  
        <table>
            <tr>
                <th colspan="2">Enter Your Details</th>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <script src="../js/premiumMembershipValidation.js"></script>
</div>

<br><button class="button-back" onclick="history.back ()">Back</button>
<h4><a href="../controller/logout.php">Logout</a></h4>  

</body>
</html>
