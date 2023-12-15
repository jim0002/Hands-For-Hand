<?php
include "../Controller/SignInCheck.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../CSS/SignIn.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
          border: none;
        }
        </style>
    <title>ADMIN Homepage</title>
</head>

<body>
    <div>
    <div class="box">
        <form action="#" method="post">
        <h2><center><b><u>ADMIN</u></b></center></h2>
    	<table align="center">
            <tr>
                  <td> <label for="uname">Username:</label></td>
                  <td> <input type="text" id="uname" name="uname" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>" placeholder="Enter username" ></td>
                  <td><?php
                  echo "<span style='color:red;'><small><b>".$unameerr."</b></small></span>";
                  ?></td>
                  </td>
            </tr>
            <tr>
                  <td> <label for="pass">Password:</label></td>
                  <td> <input type="password" id="pass" name="pass" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" placeholder="Enter password" ></td>
                  <td> <?php
                  echo "<span style='color:red;'><small><b>".$passerr."</b></small></span>";
                  ?></td>
              </tr>


              <tr><td></td><td></td></tr>
              <tr><td></td><td></td></tr>

              <tr>
                <td></td>
                <td >
                    <input type="checkbox" name="remember_me" value="remember_me">Remember me
                </td>
              </tr>

              <tr>
                <td></td>
                <td >
                    <input id='btn1' type="submit" value="Signin" name="btnsignin">
                    <input id='btn2' type="reset" name="Reset">
                </td>
              </tr>

            <tr><td></td><td></td></tr>
            <tr><td></td><td></td></tr>

            <tr>
                <td colspan="2">
                    <?php echo "<span style='color:red;'><small><b>".$signinerr."</b></small></span>"; ?>
                </td>
            </tr>

        </table>
        </form>
    
    

    <div>
        <form action="../View/SignUp.php" method="post">
            <table align="center">
                <tr>
                <td></td>
                <td colspan="3">
                    <input id='btn3' type="submit" value="SignUp" name="btnsignup">
                </td>
              </tr>
            </table>
        </form>
    </div>
    </div>
    
</body>
</html>


