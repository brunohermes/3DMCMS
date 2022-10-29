<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="design.css" rel="stylesheet">
    <title>Test</title>
    
    <div>
        <a href="register.php"><button class="signupbt">Signup now!</button><a/>
    </div>
</head>
<body>

   <div class="formpos">
    <form class="loginform" action="includes/login.inc.php" method="post">
            <span class="input"><input class="logininput" type="text" name="uid" placeholder="Username"></span><br>
            <span class="input"><input class="logininput" type="password" name="pwd" placeholder="Password"></span><br>
            <button class="login-button" type="submit" name="submit">Login</button>
        </form>
    </div>



</body>
</html>