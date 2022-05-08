<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sytem | Object Oriented PHP</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>
    <section class="p-5 mx-auto" style="border-radius: 15px;">
        <div id="bg" style="border: 1px solid rgba(255,255,255,.1);border-radius: 25px;"  class="container-lg shadow py-5 mx-auto w-50">
            <div class="row">
                <div class="col">
                    <!--- formulaire d'inscription --->
                    <div id="frm" class="text-light p-5">
                        <h1 class="display-6 text-center">LOGIN</h1>
                        <form action="../includes/login.inc.php"  method ="POST">             
                        <div class="container justify-content">
                        <div class="row">
                            <div class="row">
                            <p>
                                    <label>Username :</label>
                                    <input class="form-control" type = "text" id ="username" name  = "username" placeholder="Enter Username.." />
                            </p>
                            </div>
                            <div class="row">
                            <p>                               
                                    <label>Password :</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password.."> 
                            </p>
                            </div>
                            <p>
                                <input style="float: right;" class="btn btn-light" type="submit" id="btn" value="LOGIN" name="submit">
                            </p>
                         </div>
                        </form>
                    </div>
                    <!--- redirige vers connection si deja inscrit --->
                    <p><a class="link-dark" href="../signup.php">Don't have an account ?</a></p>
                </div>
                </div>
        </div>
    </section>


    <script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>