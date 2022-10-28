<?php
if(isset($_POST["submit"])){
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

    //Instantiate class Signup
    include "../classes/signup.classes.php";
    include "../classes/signup-cont.classes.php";
    $signup = new SignupController($uid, $pwd, $pwdRepeat, $email);
    //Error Handlrs

    //Redirect home
}

?>