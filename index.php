<?php
 $sql = "Selec"
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="design.css" rel="stylesheet">
    <title>Test</title>
</head>
<body>
    
    <section>
    <form action="includes/signup.inc.php" method="post">
        <button type="submit" name="submit">Cadastro</button>
    </form>    
    </section>
   
    <section>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="submit">Login</button>
    </form>
    </section>
</body>
</html>