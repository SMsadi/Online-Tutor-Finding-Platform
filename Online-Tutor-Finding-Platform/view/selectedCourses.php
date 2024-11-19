<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Select Package</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
      text-align: center;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="radio"] {
      margin-right: 10px;
    }

    p {
      margin-top: 5px;
      margin-bottom: 10px;
    }

    ul {
      margin-top: 5px;
      margin-bottom: 10px;
      padding-left: 20px;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>

 
<body>



  <div class="container">

    <h2>Choose Your Learning Package</h2>
    <form action="" method="post">
      <label for="free">
        <input type="radio" id="free" name="package" value="free" />
        Free Package
      </label>
      <p>Enjoy basic features with our Free Package:</p>
      <ul>
        <li>Limited access to premium content</li>
        <li>Community support</li>
      </ul>

      <label for="premium">
        <input type="radio" id="premium" name="package" value="premium" />
        Premium Package
      </label>
      <p>Unlock all features with our Premium Package:</p>
      <ul>
        <li>Full access to premium content</li>
        <li>Priority customer support</li>
        <li>Exclusive resources</li>
      </ul>

      <input type="submit" name="submit" value="Select Package" />
    </form>
  </div>
</body>
</html>


<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["submit"])) {
          if ($_POST["package"] === "free") {
              header("Location: freePackage.php");
              exit;
          }
      }
  }




  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["submit"])) {
          if ($_POST["package"] === "premium") {
              header("Location: premiumPackage.php");
              exit;
          }
      }
  }



?>