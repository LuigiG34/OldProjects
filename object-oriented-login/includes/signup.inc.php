<?php

if(isset($_POST['submit'])){
    //get data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['re-password'];
    $email = $_POST['email'];

    //signUpContr class
    include "../classes/database.class.php";
    include "../classes/signup.class.php";
    include "../classes/signup-cont.class.php";
    $signup = new signUpContr($username,$password,$repassword,$email);

    $signup->signUpUser();

    header('location: ../index.php?error=none');

}

?>