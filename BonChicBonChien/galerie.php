<!--	Code Written by Gandemer Luigi with Bootstrap 5.1	-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Galerie</title>
  <meta name="description" content="Bon Chic Bon Chien galerie image de chiens et chats.">
	<link rel="icon" type="image/png" sizes="16x16" href="img/logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body> 

<!-- Pre-Loader Function-->
<script>
window.addEventListener("load", function() {
  var load_screen = document.getElementById("load_screen");
  document.body.removeChild(load_screen);
  document.getElementById('page').classList.add('ready');
});
</script>
<!-- Pre-Loader Function-->


<!-- Style Pre-Loader -->
<style type="text/css">
@media(max-width: 767px){
  #preloadText{
    font-size: small;
  }
}
div#load_screen {
 background: #000;
 opacity: 1;
 position: fixed;
 z-index: 1;
 top: 0px;
 width: 100%;
 height: 100vh;
 font-family: 'Open Sans', sans-serif;
}

div#load_screen > div#loading {
 color: #FFF;
 width: 80%;
 margin: auto;
 margin-top: 300px;
 font-family: 'Open Sans', sans-serif;
}

#loading {
 background-color: transparent;
 color: #28CC9E;
}
#page {
  opacity: 0;
  transition: opacity .5s;
}
#page.ready {
  opacity: 1;
}
</style>
<!-- Style Pre-Loader -->


<!-- Pre-Loader -->
<div id="load_screen" class="text-center bg-primary">
 <div id="loading" class="text-center">

 <div class="bg-primary" id="overlayer">
  <div class="text-center text-light" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
  <div class="p-2" style="font-family: LeaSpar;"><h4 id="preloadText">Bon Chic Bon Chien</h4></div>
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
</div>
 </div>
</div>
<!-- Pre-Loader -->


<!-- Page Galerie/Avis -->
<div id="page">

<?php include('navbar.html') ?>
<?php include('banner.html') ?>
<?php include('avis.html') ?>
<?php include('dog_galerie.html') ?>
<?php include('footer.html') ?>
<?php include('GoTopButton.html') ?>

</div>

<!-- Page Galeie/Avis -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>