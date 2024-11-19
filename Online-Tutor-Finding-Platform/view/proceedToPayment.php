<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment Successful</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      color: #333;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }

    .container {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 600px;
    }

    h2 {
      margin-bottom: 20px;
      color: #007bff;
    }

    p {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .redirect-message {
      font-style: italic;
      color: #666;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Payment Successful</h2>
    <p>Your payment was successful.</p>
    <p class="redirect-message">Redirecting to select courses page...</p>
  </div>

  <?php
 
  header("refresh:3; url=selectCourses.php");
  exit; 
  ?>
</body>
</html>