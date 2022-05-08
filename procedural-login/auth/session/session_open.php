<?php
//verifie si id et pseudo existe ou pas
if (!isset($_SESSION['id']) AND !isset($_SESSION['pseudo'])){
echo '<center class="text-light p-4 m-2 display-6">Welcome unidentified user !</center>';
}
else{
echo '<center class="text-light p-4 m-2 display-6">Hello ' . $_SESSION['pseudo'] . ' !</center>';
}
?>
