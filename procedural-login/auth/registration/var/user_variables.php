<?php
include('../../database/db_conn.php');

$req = $pdo->prepare('SELECT * FROM members WHERE id=:id');
$req->execute(array(
    ':pseudo' => $_POST['pseudo'],
    ':pass' = $_POST['pass'],
    ':email =' $_POST["email"],
    ':firstname' = $_POST["firstname"],
    ':lastname' = $_POST["lastname"],
    ':date_birth' = $_POST["date_birth"],
    ':date_registration' = $_POST["date_registration"]));
':resultat' = $req->fetch();


if (isset($_POST['id'])) {
    session_start();
$_SESSION['id'] = $resultat['id'];
$_SESSION['pseudo'] = $resultat['pseudo'];
$_SESSION['pass'] = $resultat['pass'];
$_SESSION['email'] = $resultat['email'];
$_SESSION['firstname'] = $resultat['firstname'];
$_SESSION['lastname'] = $resultat['lastname'];
$_SESSION['date_birth'] = $resultat['date_birth'];
$_SESSION['date_registration'] = $resultat['date_registration'];
}else {
}


?>