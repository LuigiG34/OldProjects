<?php 
//require('../../config.php');
//require_once($CFG->dirroot . '/user/editlib.php');
//require_once($CFG->libdir . '/authlib.php');
//require_once('login/lib.php');


//PAGE #1
// FORM VARIABLE ENTREPRISE
$entreprise = $_POST['entreprise'];
$r_sociale = $_POST['r_sociale'];
$n_siret = $_POST['n_siret'];
$code_ape = $_POST['code_ape'];
$representant = $_POST['representant'];
$qualite = $_POST['qualite'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$adresse1 = $_POST['adresse1'];
$postal1 = $_POST['postal1'];
$ville1 = $_POST['ville1'];

// ADRESSE STAGE
$adresse2 = $_POST['adresse2'];
$postal2 = $_POST['postal2'];
$ville2 = $_POST['ville2'];


// DATA STAGIAIRE
$gender = $_POST['gender'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$telephone = $_POST['telephone'];
$portable = $_POST['portable'];



// DATE STAGE
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];
//DATE fait à montpellier le ...
$tdate = $_POST['tdate'];

$oldDateS = $sdate;
$oldDateE = $edate;
$oldDateT = $tdate;

$newDateS = date("d/m/Y", strtotime($oldDateS));
$newDateE = date("d/m/Y", strtotime($oldDateE));
$newDateT = date("d/m/Y", strtotime($oldDateT));

// PLANNING
//Lundi
$lundi_mat = $_POST['lun_mat_hour'];
$lundi_mat2 = $_POST['lun_mat_hour2'];
$lundi_apr = $_POST['lun_apr_hour'];
$lundi_apr2 = $_POST['lun_apr_hour2'];

//Mardi
$mardi_mat = $_POST['mar_mat_hour'];
$mardi_mat2 = $_POST['mar_mat_hour2'];
$mardi_apr = $_POST['mar_apr_hour'];
$mardi_apr2 = $_POST['mar_apr_hour2'];

//Mercredi
$mercredi_mat = $_POST['mer_mat_hour'];
$mercredi_mat2 = $_POST['mer_mat_hour2'];
$mercredi_apr = $_POST['mer_apr_hour'];
$mercredi_apr2 = $_POST['mer_apr_hour2'];

//Jeudi
$jeudi_mat = $_POST['jeu_mat_hour'];
$jeudi_mat2 = $_POST['jeu_mat_hour2'];
$jeudi_apr = $_POST['jeu_apr_hour'];
$jeudi_apr2 = $_POST['jeu_apr_hour2'];

//Vendredi
$vendredi_mat = $_POST['ven_mat_hour'];
$vendredi_mat2 = $_POST['ven_mat_hour2'];
$vendredi_apr = $_POST['ven_apr_hour'];
$vendredi_apr2 = $_POST['ven_apr_hour2'];

//Samedi
$samedi_mat = $_POST['sam_mat_hour'];
$samedi_mat2 = $_POST['sam_mat_hour2'];
$samedi_apr = $_POST['sam_apr_hour'];
$samedi_apr2 = $_POST['sam_apr_hour2'];

// FILE NAME
$fileName = $lname . "_" . $fname;

//PAGE #2
//OBJECTIFS FORM
$objectifs = $_POST['objectifs'];
$poste = $_POST['poste'];
$tache1 = $_POST['tache1'];
$tache2 = $_POST['tache2'];
$tache3 = $_POST['tache3'];
$tache4 = $_POST['tache4'];

//TUTEUR
$tname = $_POST['tname'];
$tfonction = $_POST['tfonction'];
$tphone = $_POST['tphone'];


// BOUCLE CHECKBOX OBJECTIFS 
foreach ($objectifs as $objectifs){ 
    return $objectifs;
}



//PAGE #3
//CHARTE QUALITE ENTREPRISE FORM
$cq_secteur = $_POST['cq_secteur'];

//DIRECTEUR CRFP
$directeur_crfp = 'Gilles BEN FODDA';
$directice_sites = 'Céline VALLEE';
$formateur_ref = $_POST['formateur_ref'];

?>