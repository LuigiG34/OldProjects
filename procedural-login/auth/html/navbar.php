<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style/style.css">

  <nav class="navbar navbar-dark shadow">
<a href="../../website-home"><img height="50px" src="../../asset/img/logo1.png" alt=""></a>
<div class="dropdown dropstart">
  <a class="btn text-light btn-sm m-2 shadow dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <!-- Navbar content -->
	<?php //Nav bar selon session 
			if (isset($_SESSION['id'])) {
			 	echo "<li><a href='auth/logout/user-end-session' class='dropdown-item shadow'>Log Out</a></li>";
        		echo "<li><a href='website-home' class='dropdown-item shadow'>Home</a></li>";
				echo "<li><a href='user/profile/user-profile' class='dropdown-item shadow'>Profile</a></li>";
			 }else{
			 	echo "<li><a href='../login/user-connection' class='dropdown-item shadow'>Log In</a></li>";
			 	echo "<li><a href='../registration/user-registration' class='dropdown-item shadow'>Register</a></li>";
         		echo "<li><a href='../../website-home' class='dropdown-item shadow'>Home</a></li>";
			 }
		 ?>
</ul>
</div>
</nav>
