<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Log In</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width">
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
    </head>
    <body>
    <?php include('../html/navbar.php');?>
        <!--- Formulaire Log In --->
        <section class="p-5 mx-auto">
            <div style="border: 1px solid rgba(255,255,255,.1);border-radius: 25px;" id="bg" class="container-lg shadow p-5 mx-auto w-50">
                <div class="row row-cols-1 text-light">
                    
                    <div class="col">
                        <div id = "frm" class="text-center p-5">
                            <h1 class="display-6 text-light">Login</h1>
                            <form name="f1" action="connection_post.php" onsubmit = "return validation()" method = "POST">
                                <p>
                                    <label class="text-light"> Username :</label>
                                    <input class="form-control" type ="text" id="pseudo" name="pseudo" placeholder="Enter Username.." />
                                </p>
                                <p>
                                    <label class="text-light">Password :</label>
                                    <input class="form-control" type="password" id="pass" name="pass" placeholder="Enter Password..">
                                </p>
                                <p>
                                    <input style="float: right;" class="btn btn-light" type="submit" id="btn" value="Login" name="login">
                                </p>
                            </form>
                        </div>
                        <!--- redirige vers mots de passe oublié si mots de passe oublié --->
                        <p><a class="link-light" href="../lost-password/user-reset">Forgot password ?</a></p>
                        <!--- redirige vers inscription si aucun compte --->
                        <p><a class="link-light" href="../registration/user-registration">Create a new account !</a></p>
                    </div>
                </div>
            </div>
        </section>
        
    </body>
</html><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>