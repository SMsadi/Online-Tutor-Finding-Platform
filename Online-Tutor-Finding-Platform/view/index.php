<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notebook</title>
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
            <li><a href="student-dashboard.php">Home</a></li>
            <li><a href="contact.php" style="color: #7b9efd;">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </div>
</header> 

<br><br><br><br><br><br><br>
    
    <h1>Your Notebook</h1>

    <form action="data.php" method="post">
            <label for="title">Title </label>
            <input type="text" name="title" id="title" placeholder="Add something to your notebook" Required>
            <br><br><br>
        <button>Add To Notebook</button>

    </form>

    </div><br>
    <div>
        <h1>Your Note Lists</h1>
        <div id="lists">
        <table>
  <thead>
    <tr>
      <th scope="col" name="id">S.no</th>
      <th scope="col">Your Notebook List</th>
    <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'database.php';
        $sql="SELECT * FROM todos";
        $result=mysqli_query($conn, $sql);

        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $title=$row['Title'];
               


                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $title  ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $id ?>" role="button">Edit</a>
                    <a href="delete.php?id=<?php echo $id ?>" role="button">Delete</a>
 
                    </td>
                      
                </tr>

                <?php

                
            }
        }
    ?>
    
   
  </tbody>
</table>
        </div>
    </div>

  </body>
</html>