<?php
// settings base de données
include('../../database/db_conn.php');
//  Récupération de l'utilisateur et de son pass hashé
$req = $pdo->prepare('SELECT * FROM members WHERE pseudo=:pseudo');
$req->execute(array(':pseudo' => $_POST['pseudo']));
$resultat = $req->fetch();
$pseudo = $_POST['pseudo'];
// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);
//boucle login
if (!$resultat)
{
echo 'Mauvais identifiant ou mot de passe !';
}
else
{
if ($isPasswordCorrect) {
session_start();
$_SESSION['id'] = $resultat['id'];
$_SESSION['pseudo'] = $pseudo;
$_SESSION['email'] = $resultat['email'];
$_SESSION['firstname'] = $resultat['firstname'];
$_SESSION['lastname'] = $resultat['lastname'];
$_SESSION['date_birth'] = $resultat['date_birth'];
$_SESSION['date_registration'] = $resultat['date_registration'];
echo 'Vous êtes connecté !';
}
else {
echo 'Mauvais identifiant ou mot de passe !';
}
}
//redirige vers index
header("Location: ../../website-home",true,301);
exit();
?>