<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Details</title>
    <link rel="stylesheet" href="css/display_premium.css">
    <link rel="stylesheet" href="css/background_image5.css">

</head>
<body>
<h2>Premium Membership</h2>
<h2>Membership Details</h2>

<?php

require_once "../model/db1.php";
$sql = "SELECT * FROM premium_membership";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Address</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}

$conn->close();
?>

<h4><a href="../controller/Logout1.php">Back to Subscription Page</a></h4>
<h3><a href="../controller/logout.php">Logout</a></h3>
</body>
</html>
