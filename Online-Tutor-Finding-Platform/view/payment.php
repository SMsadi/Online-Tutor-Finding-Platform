<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="payment.css">
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


.main{
    margin-top: 120px;
    margin-left: 120px;
    text-align: center;
    align-items: center;
    text-align: center;
}


.main .left{
    margin-top: 10px;
    margin-left: 500px;
    display: flex;
    text-align: center;
    align-items: center;
    text-align: center;
}

.main .left a{
padding: 50px;    
}

.offon{
    align-items: center;
    text-align: center;
}


.offon a{
    text-decoration: none;
    padding-left: 12px;
    font-size: 24px;
    padding: 15px;
    color: #212529;
}


.offon a:hover{
  color: #04091e;
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
                <li><a href="project/index.php" style="color: #7b9efd;">Home</a></li>
                <li><a href="signIn.php">Sign In</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="signUp.php">Sign Up</a></li>
            </ul>
        </div>

</header> 
<hr><hr>





<div class="main">
<h1>Payment section</h1>
    Caution: Please read the terms and conditions before paying your bills to your Tutor. TutionX always focuses on Users pruivacy. 
    click here to see the terms and conditions. <a href="Teamsofservice.php">Terms</a>
    <h3>
        You can pay both offline and online. In offline payment please visit the the offline section where is was written in  more details. 
        
        <br><br> <br><br><br>

    </h3>

</div>
   

<div class="offon">
        <a href="offlinePayment.php">Pay Offline</a>
        
        <a href="onlinePayment.php">Pay Online</a>
</div>      



    
<footer>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
        <a href="faq.php">FAQ</a>
        <a href="terms.php">Terms</a>

        <p>Tution BD, Online Platform for Tutoring</p>
        <p>&copyright 2024 All rights reserved</p>
</footer>




</body>
</html>