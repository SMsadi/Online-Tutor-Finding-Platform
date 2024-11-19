
<!--  

<!DOCTYPE html>
<html>
<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8" />
</head>
<body>

    <h1>Stripe Example</h1>
    <form method="post" action="checkout.php">


        <input type="checkbox" required>Terms
        <p><strong>1200.00 BDT</strong></p>
        <button>Pay</button>

        <p>your transaction history</p>
        <a href="https://dashboard.stripe.com/test/payments">click here</a>
    </form>
</body>
</html>

-->

<!DOCTYPE html>
<html>
<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="onlinePayment.css">
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
    
<form method="post" action="checkout.php" onsubmit="return validateForm()">
        <h1>ONLINE PAYMENT</h1>
        <h4>Enter your payment</h4>


        <input type="text" id="amount" name="amount" placeholder="Enter amount">
        <button type="submit">Pay</button>
    </form>


    <p>your transaction history <a href="https://dashboard.stripe.com/test/payments">click here</a></p>
        


<br>

    <label for="terms">
            <input type="checkbox" id="terms" name="terms" required>
            <span>I agree to the <a href="TeamsOfService.php" target="_blank">Terms of Service</a></span>
    </label>



</div>




    
    
<footer>
        <a href="contact.php">Contact</a> <a href="about.php">About</a> <a href="faq.php">FAQ</a> <a href="TeamsOfService.php">Terms</a> <a href="about.php">Discover Us</a>
            <p>Tution BD, Online Platform for Tutoring</p>
            <p>&copyright 2024 All rights reserved</p>
</footer>




        <script src="../js/onlinePayment.js"> </script>
</body>
</html>