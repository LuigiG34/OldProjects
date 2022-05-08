<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// settings base de données
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




//mail to
if (isset($_POST['email'])) {

$emailTo = $_POST['email'];
$code = uniqid(true);
$query= $pdo->query( "INSERT INTO resetpassword(code, email) VALUES ('$code','$emailTo')");
if (!$query) {
    exit("Error");
}



   //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'reset@gmail.com';        //SMTP username
        $mail->Password   = '#';                        //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('reset@gmail.com', 'RESET YOUR PASSWORD');
        $mail->addAddress($emailTo);     //
        $mail->addReplyTo('no-reply@example.com', 'No reply');

        //Content
        $url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/new_password.php?code=$code";
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset Password';
        $mail->Body    = "<h3>This is the new code <b>$code</b> !</h3> <p>Click <a href='$url'>this link</a> to reset !</p>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '<center><h1>Reset password has been sent to your email !</h1><h4>Go to your mailbox.</h4></center';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        exit(); 
}

?>
<title>Reset Password</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
        body{
            background-image: url('../../asset/img/bg2.png');
            background-position: center;
            background-size: cover;
            backdrop-filter: blur(5px);
        }
        #bg{
            backdrop-filter: blur(5px);
            background-color: rgba(255,255,255,.1);
        }
        label{
            float: left;
            font-size: small;
            font-weight: 500;
        }
        </style>
<!-- Formulaire reset password #1 -->
<body>
<!-- NAVBAR  -->
<style>

	#btn{
		border: 1px rgba(255,255,255,.15) solid;
		float: right;
		color: white;
		backdrop-filter: blur(5px);
        background-color: rgba(255,255,255,.10);
	}
	p{
		font-size: x-small;
	}
	nav{
		border-bottom: 1px rgba(255,255,255,.15) solid;
		backdrop-filter: blur(5px);
        background-color: rgba(255,255,255,.10);
	}
</style>

    <!-- Navbar content -->
	<?php include('../html/navbar.php') ?>

<!-- NAVBAR  -->
<section class="p-5 mx-auto">
    <div id="bg" style="border: 1px solid rgba(255,255,255,.1);border-radius: 25px;"  class="container-lg shadow p-5 mx-auto w-50">
        <div class="row row-cols-1">    
            <div class="col p-4">
                <div id = "frm" class="text-light">
                    <h1 class="display-6 text-center">Reset Password</h1>
                    <!-- <div class="row"> -->
                        <form method="POST" class="p-2">
                            <p>
                                <label class="text-light"> Email :</label>
                                <input class="form-control" type="text" name="email" placeholder="Enter email...">
                            </p>
                        <br><br>
                            <input style="float: right;" class="p-2 btn btn-light" type="submit" name="submit" value="Reset Password">
                        </form>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>