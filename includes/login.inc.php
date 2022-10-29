<?php
if(isset($_POST["submit"]))

{
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    //Instantiate class Signup
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-cont.classes.php";
    $login = new LoginController($uid, $pwd);
    //Error Handlrs
    $login->loginUser();
    //Redirect home
    header("location: ../index.php?error=none");
}

?>