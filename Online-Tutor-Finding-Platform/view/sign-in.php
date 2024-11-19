<?php
    $msg = '';
    if (isset($_GET['err'])) {
      $err_msg = $_GET['err'];
      switch ($err_msg) {
        case 'mismatch': {
            $msg = "Wrong username or password.";
            break;
          }
        case 'invalid': {
            $msg = "Fields value filled invalid";
            break;
          }
        case 'empty': {
            $msg = "Field(s) cannot be empty.";
            break;
          }
        case 'created': {
            $msg = "Account created. Please log in";
            break;
          }
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="css/auth-styles.css" />
    <link rel="stylesheet" href="css/background_image2.css">


    
    
</head>

<body>
    <center>
        <h2>Sign in</h2>
        <form action="../controller/signin-controller.php" method="post" onsubmit="return validateForm();">
            <table border="0" cellspacing="0" cellpadding="10">
                <?php if (strlen($msg) > 0) { ?>
                <tr align="center">
                    <td colspan="4">
                        <font color="red"> <?= $msg ?></font>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="signin"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="anchor"><a href="sign-up.php">New? create an account</a></div>
                    </td>
                </tr>
            </table>
        </form>
    </center>
    <script src="../js/signin-script.js"></script>
</body>

</html>