<?php

$db="registration";
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

?>