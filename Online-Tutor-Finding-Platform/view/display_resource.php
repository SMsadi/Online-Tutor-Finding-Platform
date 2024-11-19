<Html>
    <head>
    <link rel="stylesheet" href="css/display_resource.css">
    <link rel="stylesheet" href="css/background_image8.css">

    </head>
<h3>Sorry, but now only books are available.</h3><br>
<h4>Items:</h4><br>
<?php
session_start();

require_once "../model/db1.php";
if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM books";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            
                while ($row = $result->fetch_assoc()) {
                    echo "<h3><b>Book Title:</b></h3";
                    echo "<div class='book'>";
                    echo "<h4>" . $row["title"] . "</h4>";
                    echo "<p><strong>Author:</strong> " . $row["author"] . "</p>";
                    echo "<p><strong>Published Year:</strong> " . $row["published_year"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
    </div>
    <h4><a href="../controller/Logout4.php">Back To Prev. Page</a></h4>
    <h3><a href="../controller/logout.php">Logout</a></h3>
</body>
</html>