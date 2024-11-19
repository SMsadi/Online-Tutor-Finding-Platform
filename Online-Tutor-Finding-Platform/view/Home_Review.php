 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoring and Education Management System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="css/background_image7.css">

</head>
<body>
    <h1>Teacher Review & Rating</h1>
    <form id="reviewForm" action="../controller/Review.php" method="POST">
        <label for="teacher_name">Teacher Name:</label>
        <input type="text"  name="teacher_name" required><br>
        <label for="subject">Subject:</label>
        <input type="text"  name="subject" required><br>
        <label for="review">Review:</label>
        <input type="text" name="review" required><br>
        <button type="submit">Add Review</button>
    </form>

    <h2>View Review</h2>
    <a href="DisplayReview.php">View Review</a>
</body>
</html>

<br><button class="button-back" onclick="history.back ()">Back</button>
<h4><a href="../controller/logout.php">Logout</a></h4>
<script src="../js/reviewValidation.js"></script>
</body>
</html>
