<html>
    <head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/display_review.css">
    <link rel="stylesheet" href="css/background_image7.css">

    </head>
<body>
<h2>Teacher Review & Rating</h2>
<h2>Review Details</h2>


<?php
require_once "../model/db1.php";
$sql = "SELECT * FROM review ";  
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Teacher Name</th><th>Subject</th><th>Review</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["teacher_name"]. "</td><td>" . $row["subject"]. "</td><td>" . $row["review"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<h4><a href="../controller/Logout3.php">Back to Review Taking Page </a></h4>
<h3><a href="../controller/logout.php">Logout</a></h3>
</body>
</html>