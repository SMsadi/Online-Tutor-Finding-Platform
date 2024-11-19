 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoring and Education Management System</title>
    <link rel="stylesheet" href="css/progress.css">
    <link rel="stylesheet" href="css/background_image6.css">

</head>
<body>
    <h1>Student Progress Tracking</h1>
    <form id="progressForm" action="../controller/Progress_Tracking.php" method="POST">
        <label for="student_name">Student Name:</label>
        <input type="text"  name="student_name" required><br>
        <label for="subject">Subject:</label>
        <input type="text"  name="subject" required><br>
        <label for="progress">Progress:</label>
        <input type="text" name="progress" required><br>
        <button type="submit">Add Progress</button>
    </form>
    <script src="../js/progressValidation.js"></script>
    <h2>View Progress</h2>
    <a href="DisplayProgress.php">View Progress</a>
</body>
</html>


<br><button class="button-back" onclick="history.back ()">Back</button>
<h4><a href="../controller/logout.php">Logout</a></h4>

</body>
</html>
