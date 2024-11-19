<html>
    <head>
    <link rel="stylesheet" href="css/display_progress.css">
    <link rel="stylesheet" href="css/background_image6.css">

    </head>
<body>
<h2>Student Progress Tracking</h2>
<h2>Progress Details</h2>


<?php
require_once "../model/db1.php";
$sql = "SELECT * FROM progress";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Student Name</th><th>Subject</th><th>Progress</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["student_name"]. "</td><td>" . $row["subject"]. "</td><td>" . $row["progress"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<h4><a href="../controller/Logout2.php">Back to Progress Track Page </a></h4>
<h3><a href="../controller/logout.php">Logout</a></h3>
</body>
</html>