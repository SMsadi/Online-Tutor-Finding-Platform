<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    html, body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    header {
        width: 100%;
        height: 70px;
        position: fixed;
        top: 0;
        background-color: #fff;
    }

    header div {
        float: left;
        justify-content: space-between;
        align-items: center;
    }

    header .logo {
        margin-left: 100px;
        padding: 20px;
        font-size: 40px;
        font-style: italic;
    }

    header .nav {
        position: absolute;
        top: 0;
        right: 0;
        margin-right: 200px;
    }

    header .nav ul {
        list-style: none;
    }

    header .nav ul li {
        float: left;
        padding-right: 40px;
        padding-top: 10px;
    }

    header .nav ul li a {
        text-decoration: none;
        color: rgb(41, 41, 41);
        text-transform: uppercase;
        font-size: 12px;
        font-weight: bold;
        font-size: 16px;
    }

    header .nav ul li a:hover {
        color: #7b9efd ;
    }

    footer {
        margin-top: 60px;
        padding-top: 15px;
        width: 100%;
        background-color: #212529;
        color: white;
        text-align: center;
        padding-bottom: 20px;
    }

    footer a {
        padding: 14px;
        text-decoration: none;
        color: aliceblue;
    }

    footer a:hover {
        color: crimson;
    }

    .container {
        margin-top: 60px;
        margin-left: 30px;
        display: flex;
        align-items: center;
    }

    .container .left {
        margin-top: 130px;
        margin-left: 0;
        width: 30%;
    }

    .right {
        margin-top: 80px;
        margin-left: 460px;
        font-size: 20px;
    }

    .right input {
        width: 110%;
        height: 30px;
        border-width: 2px;
    }

    .right textarea {
        width: 110%;
        height: 30px;
        border-width: 2px;
        height: 80px;
    }

    .right button {
        width: 80%;
    }

    .note {
        margin-top: 70px;
    }

    .note p {
        align-items: center;
        text-align: center;
        text-decoration: none;
    }

    .socialMedia i {
        font-size: 25px;
        padding: 12px;
    }

    .socialMedia {
        margin-left: 580px;
    }

    .socialMedia P {
        align-items: center;
        text-align: center;
        justify-content: center;
        margin-right: 585px;
        margin-top: 50px;
    }

    footer .socialMedia i {
        font-size: 25px;
        padding: 10px;
    }

    footer .socialMedia {
        margin-left: 10px;
        margin-top: 5px;
    }

    footer .socialMedia i:hover.fa-facebook {
        color: royalblue;
    }

    footer .socialMedia i:hover.fa-whatsapp {
        color: yellowgreen;
    }

    footer .socialMedia i:hover.fa-linkedin {
        color: crimson;
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
            <li><a href="/LIKHI/homepage.php">Home</a></li>
            <li><a href="/LIKHI/index.php">Sign In</a></li>
            <li><a href="contact.php" style="color: #7b9efd;">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </div>
</header> 
<hr><hr>
<div class="container">
    <div class="left">
        <img src="img/plane.jpg" alt="">  
    </div>
    <div class="right">
        <form id="contact" action="mail.php" method="post" onsubmit="return validateForm()">
            <h1>Contact Us</h1>
            <br><br>
            <input placeholder="Your name" name="name" id="name" type="text">
            <span id="nameError" class="error"></span>
            <br> <br>
            <input placeholder="Your Email Address" name="email" id="email" type="email" >
            <span id="emailError" class="error"></span>
            <br> <br>
            <input placeholder="Type your subject line" type="text" name="subject">
            <br> <br>
            <textarea name="message" placeholder="Type your Message Details Here..."></textarea>
            <br> <br>
            <button type="submit" name="send" id="contact-submit">Submit Now</button>
        </form>
    </div>
</div>

<br><br>
<footer>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="FAQ.php">FAQ</a>
    <a href="terms.php">Terms</a>


    <div class="socialMedia">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-whatsapp"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-twitter"></i>
    </div>
    <p>Tution BD, Online Platform for Tutoring</p>
    <p>&copy; 2024 All rights reserved</p>
</footer>


<script src="../js/contact.js"> </script>

</body>
</html>