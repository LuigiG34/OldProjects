<!DOCTYPE html>
<html>
<head>
	<title>Enter Email</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style_forgot.css">
</head>
<body>

<div id = "frm">
<img src="../img/logo_startup.png">  
	<h1>Email Adress</h1>  
    <form name="f1" action = ".php" onsubmit = "return validation()" method = "POST">  
    
    <p><label>Email :</label>
    	<input type = "text" id ="email" name  = "email" placeholder="Enter email adress.." /></p>
    
    <p><input type="submit" id="btn" value="Confirm" name="confirm"></p>
</form>
</div>

</body>
</html>