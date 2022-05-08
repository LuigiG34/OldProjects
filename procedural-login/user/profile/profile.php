<?php
include('../../database/db_conn.php');
session_start();
$req = $pdo->prepare('SELECT * FROM members');
$resultat = $req->fetch();
// session info var
if (isset($_POST['id'])) {
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $resultat['pseudo'];
    $_SESSION['pass'] = $resultat['pass'];
    $_SESSION['email'] = $resultat['email'];
    $_SESSION['firstname'] = $resultat['firstname'];
    $_SESSION['lastname'] = $resultat['lastname'];
    $_SESSION['date_birth'] = $resultat['date_birth'];
    $_SESSION['date_registration'] = $resultat['date_registration'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>USER PROFILE</title>
    <link rel="stylesheet" href="style/style-profile.css">
</head>
<body>
<?php include('html/navbar.php'); ?>

<section class="p-5 mx-auto text-light">
    <div id="bg" style="border: 1px rgba(255,255,255,.1) solid;border-radius: 25px;" class="container-lg shadow p-5 mx-auto w-50">
    <div class="display-6 text-center  p-3">Profile</div>
    <div class="row p-2">
        <hr>
    </div>
    	<div class="row p-3">
            <div class="col">
            <p id='firstname' class="lead" name='firstname'>
                <strong>Firstname :</strong> 
                <?php
                    if (!isset($_SESSION['id']) AND !isset($_SESSION['pseudo'])){
                    echo 'unidentified';
                    }else{
                    echo ' ' . $_SESSION['firstname'];
                    }
                ?>
                </p>
            </div>

           <div class="col">
           <p id='lastname' class="lead" name='lastname'>
           <strong>Lastname :</strong>  
                <?php
                    if (!isset($_SESSION['id']) AND !isset($_SESSION['pseudo'])){
                    echo 'unidentified';
                    }else{
                    echo ' ' . $_SESSION['lastname'];
                    }
                ?>
                </p>
           </div>
        </div>

        <div class="row p-3">
        <p id='email' name='email' class="lead">
        <strong> E-mail :</strong> 
           <?php
                if (!isset($_SESSION['id']) AND !isset($_SESSION['pseudo'])){
                echo 'unidentified';
                }else{
                echo ' ' . $_SESSION['email'];
                }
            ?>
            </p>
        </div>
        <div class="row p-3">
           <p id='date_registration' name='date_registration' class="lead">
           <strong> Pseudo :</strong>  
           <?php
                if (!isset($_SESSION['id']) AND !isset($_SESSION['pseudo'])){
                echo 'unidentified';
                }else{
                echo ' ' . $_SESSION['pseudo'];
                }
            ?>
           </p>
        </div>
        <div class="row p-3">
           <p id='date_birth' name='date_birth' class="lead">
           <strong> Date of birth :</strong>  
           <?php
                if (!isset($_SESSION['id']) AND !isset($_SESSION['pseudo'])){
                echo 'unidentified';
                }else{
                echo ' ' . $_SESSION['date_birth'];
                }
            ?>
           </p>
        </div>
        <div class="row p-3">
           <p id='date_registration' name='date_registration' class="lead">
           <strong> Date of registration :</strong> 
           <?php
                if (!isset($_SESSION['id']) AND !isset($_SESSION['pseudo'])){
                echo 'unidentified';
                }else{
                echo ' ' .$_SESSION['date_registration'];
                }
            ?>
           </p>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>