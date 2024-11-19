<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource & Library</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/resource.css">
    <link rel="stylesheet" href="css/background_image8.css">


</head>
<body>
<h2>Resource & Library</h2>
<h2>Add Items</h2>
   <b>Books:</b>
        <form action="../controller/ResourceCheck.php" method="post">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required><br>

            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required><br>

            <label for="published_year">Published Year:</label>
            <input type="text" id="published_year" name="published_year" required><br>

            <input type="submit" value="Add Items">  
        </form>
        <script src="../js/resourceValidation.js"></script>
        <h3><a href="display_resource.php">Display Resources</a></h3>
        
        <br><button class="button-back" onclick="history.back ()">Back</button>

        <h4><a href="../controller/logout.php">Logout</a></h4>
</body>
</html>