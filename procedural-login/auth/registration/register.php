<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="style_register.css">
        <meta name="viewport" content="width=device-width">
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
    </head>
    <body>
    <?php include('../html/navbar.php');?>
        <section class="p-5 mx-auto" style="border-radius: 15px;">
            <div id="bg" style="border: 1px solid rgba(255,255,255,.1);border-radius: 25px;"  class="container-lg shadow p-5 mx-auto w-50">
                <div class="row row-cols-1">                    
                    <div class="col">
                        <!--- formulaire d'inscription --->
                        <div id="frm" class="text-light p-5">
                            <h1 class="display-6 text-center">Register</h1>
                            <form action="post_register.php" onsubmit="return validation()" method ="POST">             
                            <div class="container justify-content">
                            <div class="row">
                                <div class="col">
                                <p>
                                        <label>Firstname :</label>
                                        <input class="form-control" type = "text" id ="firstname" name  = "firstname" placeholder="Enter Firstname.." />
                                </p>
                                </div>
                                <div class="col">
                                <p>
                                        <label>Lastname :</label>
                                        <input class="form-control" type = "text" id ="lastname" name  = "lastname" placeholder="Enter Lastname.." />
                                </p>
                                </div>
                                </div>
                                <div class="row">
                                <p>
                                        <label>Username :</label>
                                        <input class="form-control" type = "text" id ="pseudo" name  = "pseudo" placeholder="Enter Username.." />
                                </p>
                                </div>
                                <div class="row">
                                <p>                               
                                        <label>Password :</label>
                                        <input class="form-control" type="password" id="pass" name="pass" placeholder="Enter Password.."> 
                                </p>
                                </div>
                                <div class="row">
                                <p>
                                        <label>Password again :</label>
                                        <input class="form-control" type="password" id="pass" name="pass" placeholder="Re-enter Password..">
                                </p>
                                </div>
                                <div class="row">
                                <p>
                                        <label>Email adress :</label>
                                        <input class="form-control" type="text" id="mail" name="email" placeholder="Enter Email adress..">                                   
                                </p>
                                </div>
                                <div class="row">
                                <p>
                                        <label>Date of birth :</label>
                                        <input class="form-control" type="date" id="date_birth" name="date_birth" min="1900-01-01" max="2021-01-01">                                   
                                </p>
                                </div>
                                <p>
                                    <input style="float: right;" class="btn btn-light" type="submit" id="btn" value="Register" name="register">
                                </p>
                             </div>
                            </form>
                        </div>
                        <!--- redirige vers connection si deja inscrit --->
                        <p><a class="link-light" href="../login/user-connection">Already have an account ?</a></p>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>