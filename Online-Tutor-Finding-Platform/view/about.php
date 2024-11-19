<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="about.css">
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

.main{
    margin-left: 60px;
    margin-right: 60px;
    margin-top: 100px;
    align-items: center;
    text-align: center;
    line-height: 35px;
    letter-spacing: 2px;
}


.contact a{
    text-decoration: none;
    color: chocolate;
    font-size: 20px;
}




footer{
    margin-top: 60px;
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
                <li><a href="contact.php" >Contact</a></li>
                <li><a href="about.php"  style="color: #7b9efd;">About</a></li>
               
            </ul>
        </div>

</header> 
<hr><hr>

<br><br>





    <div class="main">

        <h1>About Us</h1>
        <h3>We are the team members of online tutuion
        here we are one family 
        our team are focusing on Tueacher , students and the guardian through both online and offline</h3>
       
        <p> "Tuition Terminal" is a leading full-stack learning platform in Bangladesh where students can enroll in academic preparation, skills, arts & crafts, etc. through home, online, batch, & crash tutors who are committed to making your children's learning fun, comprehensive & easier. Tuition Terminal's Affiliate Program is a fantastic method for extra earnings. Everyone is eligible for this opportunity, including housewives, students, & employees. Be a Affiliate Partner with us & start earnings.Country's #1 Tutor Matching
        & Learning Platform.Hire a conversant tutor to make your children's learning fun, comprehensive & easier.</p>
       


        <img src="img/about.JPG" alt="">


        <div class="contact">
            <a href="contact.php" target="_blank">Contact Us</a> <br> <br>
        </div>
    


        
        
    </div>


           
    <footer>
        <a href="view/contact.php">Contact</a>
        <a href="view/about.php">About</a>
        <a href="FAQ.php">FAQ</a>
        <a href="terms.php">Terms</a>
    

        <div class="socialMedia">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-whatsapp"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-twitter"></i>
        </div>
            <p>Tution BD, Online Platform for Tutoring</p>
            <p>&copyright 2024 All rights reserved</p>
    </footer>



</body>
</html>
