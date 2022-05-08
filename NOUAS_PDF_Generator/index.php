<!--<?php
/*require('../../config.php');
require_once($CFG->dirroot . '/user/editlib.php');
require_once($CFG->libdir . '/authlib.php');
*/?>-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PDF GENERATOR</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		
		table, th, td {
  		border: 1px solid lightgrey;
			background-color: rgba(255,255,255,.05);
		}
		body{
			background-image: url('img/BG_MDDL4.png');
			background-position: center;
			background-size: cover;
		}
		h1{
			backdrop-filter: blur(5px);
			background-color: rgba(255,255,255,.1);
		}
		h2,h1{
			color: white;
		}

		label{
			color: white;
		}
		th, tr{
			color: white;
		}
		form{
			backdrop-filter: blur(5px);
			background-color: rgba(255,255,255,.1);
		}
	</style>
</head>

<body>

	<div class="container mx-auto p-5">

		<center>
			<h1 class="h1 w-75 shadow" style="border: 1px solid lightgrey;"><strong class="display-4">CONVENTION DE STAGE</strong><br>Nouas SUP DEC</h1>
		</center>

		<form style="border: 1px solid lightgrey;" class="shadow p-5 mx-auto w-75" method="post" action="pdf_post.php">

			<!-- PAGE #1 PDF-->
			<!-- INPUT ENTREPRISE DATA -->
			<?php include('form/form_entreprise.php'); ?>
			
			<!-- INPUT STAGIAIRE DATA -->
			<?php include('form/form_stagiaire.php'); ?>
			
			<!-- INPUT PLANNING DATA -->
			<?php include('form/form_planning.php'); ?>

			<!-- PAGE #2 PDF-->
			<!-- INPUT OBJECTIFS DATA -->
			<?php include('form/form_objectifs.php'); ?>

			<!-- PAGE #3 PDF-->
			<!-- INPUT CHARTE QUALITE ENTREPRISE DATA -->
			<?php include('form/form_charte_qualite.php'); ?><br>



			<!-- SUBMIT -->
			<br><button type="submit" name="submit" class="btn btn-light">Generate PDF</button>

		</form>

	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="script.js"></script>
</body>
</html>

