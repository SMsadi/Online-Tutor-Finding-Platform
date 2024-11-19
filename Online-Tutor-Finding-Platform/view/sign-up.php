<?php
    $msg = '';
    if (isset($_GET['err'])) {
      $err_msg = $_GET['err'];
      switch ($err_msg) {
        case 'password-missmatch': {
            $msg = "Password and confirm password not matched.";
            break;
          }
        case 'invalid': {
            $msg = "Fields vlaue filled invalid";
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
    <title>Sign up</title>
    <link rel="stylesheet" href="css/auth-styles.css" />
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="css/background_image3.css">
</head>

<body>
    <center>
        <h2>Sign up</h2>
        <form action="../controller/sign-up-controller.php" method="post" onsubmit="return validateForm();">
            <table border="0" cellspacing="0" cellpadding="10">
                <?php if (strlen($msg) > 0) { ?>
                <tr align="center">
                    <td colspan="4">
                        <font color="red"> <?= $msg ?></font>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" id="name" name="name"></td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="country">Country:</label></td>
                    <td>
                        <select id="country" name="country">
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="USA">United States of America</option>
                            <option value="UK">United Kingdom</option>
                            <option value="India">India</option>
                            <option value="China">China</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td>
                        <select id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="phone">Phone:</label></td>
                    <td><input type="tel" id="phone" name="phone"></td>
                </tr>
                <tr>
                    <td><label for="user_type">UserType:</label></td>
                    <td>
                        <select id="user_type" name="user_type">
                            <option value="student">Student</option>
                            <option value="tutor">Tutor</option>
                            <option value="admin">Admin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="confirm_password">Confirm Password:</label></td>
                    <td><input type="password" id="confirm_password" name="confirm_password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="signup"></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="sign-in.php">Alrady have an account? sign in</a></td>
                </tr>
            </table>
        </form>
    </center>
    <script src="../js/signup-script.js"></script>
</body>

</html>