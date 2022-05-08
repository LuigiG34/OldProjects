<?php
// settings base de données
$db="register";
$dbhost="localhost";
$dbport=3306; 
$dbuser="root";
$dbpasswd="";
// Connexion a BDD (entre PHP et MySQL)
try{
	$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	$pdo->exec("SET CHARACTER SET utf8");
// Si une erreur est présente on affiche un msg et on arrete
}catch(Exception $e){
	die('Erreur : ' .$e->getMessage());
}



if (!isset($_GET['code'])) {
	exit("Can't find page !");
}
$code = $_GET['code'];

$getEmailQuery = $pdo->query("SELECT email FROM resetpassword WHERE code='$code'");
if (isset($getEmailQuery) == 0) {
	exit("Can't find page !");
}
if (isset($_POST['password'])) {
	$pw = $_POST['password'];
	$pw = password_hash($pw, PASSWORD_DEFAULT);

	$row =$pdo->execute(array($getEmailQuery));
	$resultat = $row->fetch();
	$email = $row['email'];

	$query = $pdo->query("UPDATE membres SET pass='$pw' WHERE email='$email'");

	if ($query) {
		$query = $pdo->query("DELETE FROM resetpassword WHERE code='$code'");
		exit("Password updated !");

	}else{
		exit("Something went wrong !");
	}
}

?>





<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<section class="p-5 mx-auto">
    <div class="container-lg bg-warning p-5 mx-auto">
    <div class="row row-cols-1">    
    
    <div class="col p-5">
<!-- Formulaire reset password #2 -->
<div id = "frm" class="text-center text-dark">

	<h1>Reset Password</h1>  
    <form method="POST">  
    
    <p><label>New Password :</label>
    	<input type="password" id="password" name="password" placeholder="New password.." /></p>

    
    <p><input type="submit" id="btn" class="p-2 btn btn-dark" value="Reset" name="reset"></p>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>