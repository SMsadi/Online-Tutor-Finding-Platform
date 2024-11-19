<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['course'])) {
   
    $selected_course = $_POST['course'];
    
    
    header("Location: selectedCourses.php?course=$selected_course");
    exit; // Ensure script stops here to prevent further execution
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Select Course</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        
header{
    width: 100%;
    height: 70px;
    position: fixed;
    top: 0;
    background-color: #fff;
}

header div{
    float: left;
    justify-content: space-between;
    align-items: center;
}

header .logo{
    margin-left: 100px;
    padding: 20px;
    font-size: 40px;
    font-style: italic;
    
}

header .nav{
    position: absolute;
    top: 0;
    right: 0;
    margin-right: 200px;
}

header .nav ul{
    list-style: none;
}


header .nav ul li{
    float: left;
    padding-right: 40px;
    padding-top: 10px;
}


header .nav ul li a{
    text-decoration: none;
    color: rgb(41, 41, 41);
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    font-size: 16px;
}

header .nav ul li a:hover{
    color:#7b9efd ;
}


    </style>
</head>
<body>



  
<header>
        <div class="logo">
            <span>TutionX</span>
        </div>
        <div class="nav">


            <ul>
                <li><a href="student-dashboard.php" style="color: #7b9efd;">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>

</header> 
<hr><hr>



    <h2>Select a Course</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="course">Choose a course:</label>
        <select name="course" id="course">
            <option value="web_teach">Web Teach (Instructor: Al-Amin)</option>
            <option value="algorithm">Algorithm (Instructor: Mahfujur Rahman)</option>
            <option value="oop">OOP (Instructor: Mahfujur Rahman)</option>
        </select>
        <br /><br />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>