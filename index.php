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
    <title>.</title>
        <div class="header-register">
            <a href="register.php"><button class="signupbt">Signup now!</button><a/>
        </div>
</head>
<body>
    <div class="container">
    <embed src="resources/designcomp.svg"/>
          <form class="loginform" action="includes/login.inc.php" method="post">
            <div class="designform">
            <h1>Sign in</h1>
        </div>
            <input class="logininput" type="text" name="uid" placeholder="|  Username"><br>
            <input class="pwdinput" type="password" name="pwd" placeholder="|  Password"><br>
            <button class="login-button" type="submit" name="submit">Continue</button>
            
            <div>
            <span class="loginw"><hr class="hr1"></hr>or Sign in with<hr class="hr2"></hr></span>
            <center><span align="center" class="social-icons"><a href="#"><img class="social" src="resources/facebook.png"></a><a href="#"><img class="social" src="resources/google.png"></a><a href="#"><img class="social" src="resources/twitter.png"></a></span></center>
             
        </div>
           </form>
    </div>

</body>

<footer>
    <div class="footer">
        <hr class="footerhr"></hr>
        <a class="footerlink" href="#">Link #1</a> <a class="footerlink" href="#">Link #2</a> <a class="footerlink" href="#">Link #3</a> <a class="footerlink" href="#">Link #5</a>
    </div>

</footer>
</html>