<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
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

        .right .img{
            margin-left: 50px;
        }

        footer{
            padding-top: 15px;
            width: 100%;
            background-color: #212529;
            color: white;
            text-align: center;
            padding-bottom: 20px;
        }

        footer a{
            padding: 14px;
            text-decoration: none;
            color: aliceblue;
        }

        footer a:hover{
            color: crimson;
        }

        .main{
            align-items: center;
            display: flex;
            margin-top: 130px;
            margin-bottom: 120px;
        }

        .main .left{
            margin-left: 120px;
            line-height: 45px;
        }

        .main .right{
            margin-left: 100px;
            line-height: 45px;
        }

        .picture{
            margin-left: 130px;
            margin-bottom: 90px;
        }

        footer .socialMedia i{
            font-size: 25px;
            padding: 10px;
        }

        footer .socialMedia{
            margin-left: 10px;
            margin-top: 5px;
        }

        footer .socialMedia i:hover.fa-facebook{
            color: royalblue;
        }

        footer .socialMedia i:hover.fa-whatsapp{
            color: yellowgreen;
        }

        footer .socialMedia i:hover.fa-linkedin{
            color:crimson;
        }

        footer .socialMedia i:hover.fa-twitter{
            color: slateblue;
        }

        .tutionX{
            text-decoration: none;
            font-size: 45px;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
          <span><i>TutionX</i></span>
    </div>

    <div class="nav">
        <ul>
            <li><a href="homepage.php" style="color: #7b9efd;">Home</a></li>
            <li><a href="index.php">Become A Tutor</a></li>
            <li><a href="view/contact.php">Contact</a></li>
            <li><a href="view/about.php">About</a></li>
            <li><a href="view/EventCalender.php">Event Calendar</a></li>
            <li><a href="index.php">Sign In</a></li>
        </ul>
    </div>
</header>

<hr><hr>

<div class="main">
    <div class="left">
        <h2>Online tutoring and education services</h2>
        <p>Country's #1 Tutor Matching & Learning Platform. <br> Hire a conversant tutor to <br> make your children's learning <br> fun, comprehensive & easier.</p>
    </div>
    <div class="right">
        <div class="img">
            <img src="assets/images/hero-b998349b.svg" alt="">
        </div>         
    </div>  
</div>

<div class="picture">
    <img src="assets/images/indexpic.jpg" alt="">
</div>

<footer>
    <a href="view/contact.php">Contact</a>
     <a href="view/about.php">About</a> 
     <a href="view/FAQ.php">FAQ</a> 
     <a href="view/terms.php">Terms</a>

    <div class="socialMedia">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-whatsapp"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-twitter"></i>
    </div>
    <p>TutionX, Online Platform for Tutoring</p>
    <p>&copy; 2024 All rights reserved</p>
</footer>

</body>
</html>