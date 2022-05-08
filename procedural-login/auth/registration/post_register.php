<?php
// settings base de données
include('../../database/db_conn.php');
// Vérification de la validité des informations
include('var/user_variables.php');
// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
// Insertion
$req = $pdo->prepare('INSERT INTO members(pseudo, pass, email, firstname, lastname, date_birth, date_registration) VALUES(:pseudo, :pass, :email, :firstname, :lastname, :date_birth, CURDATE())');
$req->execute(array(
'pseudo' => $_POST["pseudo"],
'pass' => $pass_hache,
'email' => $_POST["email"],
'firstname' => $_POST["firstname"],
'lastname' => $_POST["lastname"],
'date_birth' => $_POST["date_birth"]));

header("Location: ../login/connection.php")
?>