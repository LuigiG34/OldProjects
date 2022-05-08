<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sytem | Object Oriented PHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
<?php
if(!isset($_SESSION["userid"])){
    echo '<button class="btn btn-dark"><a href="view/login.php">LOGIN</a></button><button class="btn btn-dark"><a href="view/signup.php">SIGNUP</a></button>';
}else{
    echo '<button class="btn btn-dark"><a href="includes/logout.inc.php">LOGOUT</a></button>';
}
?>



<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>