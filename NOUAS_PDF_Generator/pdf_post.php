<?php
//INCLUDE TCPDF AND VARIABLES FROM INPUT
include('tcpdf/tcpdf.php');
include('var/form_variable.php');

// Extend TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
    		$image_file = 'img/nouas-sup-dec.png';
    		$image_file2 = 'img/crfp.jpeg';
    		$image_file3 = 'img/logo-occitanie.png';

        $this->Image($image_file, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->Image($image_file2, 30, 10, 15, '', 'JPEG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->Image($image_file3, 180, 10, 20, '10', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(110, 0, 'Nouas SUP DEC', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
    		//footer img
    		$image_file5 = 'img/bas_page.png';
    		 $this->Image($image_file5, 30, 260, 150, '25', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);

    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Luigi Gandemer');
$pdf->SetTitle('Convention de stage');
$pdf->SetSubject('TCPDF Stage');
$pdf->SetKeywords('TCPDF, PDF, stage, convention');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Nouas SUP DEC', "Nouas Formation\nwww.nouas.org");

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'B', 12);

// add a page
$pdf->AddPage();

$pdf->Cell(0, 0, 'CONVENTION DE STAGE', 0, 1, 'C', 0, '', 0);

$pdf->SetFont('times', 'B', 9);
$pdf->Cell(0, 0, "Période d'application en Entreprise", 0, 1, 'C', 0, '', 0);

// set cell padding
$pdf->setCellPaddings(0, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 255);
$pdf->SetFont('times', '', 10.5);

//variable cachet entreprise
$cachet = "Cachet de l'entreprise :";

// cell content
//Entreprise
$pdf->MultiCell(70, 40, "<strong>Art 1 :</strong> Entre l'<strong>Entreprise</strong> : ".$entreprise, 0, 'L', 1, 0, '', '40', true, 0, true, true, 40, 'T');

// Cachet entreprise
$pdf->MultiCell(55, 40, ''.$cachet, 1, 'C', 1, 0, '140', '40', true, 0, false, true, 40, 'T');

// Raison social
$pdf->MultiCell(55, 40, '<strong>Raison social</strong> : '.$r_sociale, 0, 'L', 1, 0, '', '45', true, 0, true, true, 40, 'T');

// N°SIRET & Code APE
$pdf->MultiCell(90, 40, '<strong>N°SIRET</strong> : '.$n_siret. '<strong> Code APE</strong> : '.$code_ape, 0, 'L', 1, 0, '', '50', true, 0, true, true, 40, 'T');

// Représentant + Fonction
$pdf->MultiCell(120, 40, '<strong>Représentée par</strong> : '.$representant. '<strong> en qualité de</strong> : '.$qualite, 0, 'L', 1, 0, '', '55', true, 0, true, true, 40, 'T');

// Téléphone
$pdf->MultiCell(55, 40, '<strong>Téléphone</strong> : '.$phone, 0, 'L', 1, 0, '', '60', true, 0, true, true, 40, 'T');

// Adresse e.mail
$pdf->MultiCell(85, 40, '<strong>Adresse e.mail</strong> : '.$email, 0, 'L', 1, 0, '', '65', true, 0, true, true, 40, 'T');

// Adresse
$pdf->MultiCell(55, 40, '<strong>Adresse</strong> : '.$adresse1, 0, 'L', 1, 0, '', '70', true, 0, true, true, 40, 'T');

// POSTAL + VILLE
$pdf->MultiCell(85, 40, '<strong>Code postal</strong> : '.$postal1. '<strong> Ville</strong> : '.$ville1, 0, 'L', 1, 0, '', '75', true, 0, true, true, 40, 'T');

// Lieu stage
$pdf->MultiCell(105, 40, "<strong>Lieu de réalisation de stage (si différent de l'adresse ci-dessus) :</strong>", 0, 'L', 1, 0, '', '85', true, 0, true, true, 40, 'T');

// Adresse stage
$pdf->MultiCell(55, 40, '<strong>Adresse</strong> : '.$adresse2, 0, 'L', 1, 0, '', '90', true, 0, true, true, 40, 'T');

// POSTAL + VILLE stage
$pdf->MultiCell(85, 40, '<strong>Code postal</strong> : '.$postal2. '<strong> Ville</strong> : '.$ville2, 0, 'L', 1, 0, '', '95', true, 0, true, true, 40, 'T');

// D'une part
$pdf->MultiCell(55, 40, "D'une part,", 0, 'L', 1, 0, '', '105', true, 0, true, true, 40, 'T');

// ASSOCIATION NOUAS
$pdf->MultiCell(120, 40, "<u>Et</u><strong> L'ASSOCIATION NOUAS, membre du groupement Projet Pro C.R.F.P</strong><br>Adresse : <strong>925 RUE D'ALCO - 34080</strong><br>Téléphone : <strong>04 67 10 02 17</strong><br>Adresse e.mail : <strong>secretariat@nouas.org</strong><br>Nom du responsable :<strong> M. ELKACHACH Salah</strong>", 0, 'L', 1, 0, '', '115', true, 0, true, true, 40, 'T');

// NOUAS CHARGE DE SUIVI
$pdf->MultiCell(150, 40, "<strong>Le formateur de l'Association NOUAS chargé du suivi en entreprise : Nom : M. NUNEZ Ivan</strong>", 0, 'L', 1, 0, '', '140', true, 0, true, true, 40, 'T');

// STAGIAIRE (ADD $gender for Mr, Mme, Mlle)
$pdf->MultiCell(130, 40, "$gender <strong>Nom : </strong>$lname<strong> Prénom : </strong>$fname", 0, 'L', 1, 0, '', '150', true, 0, true, true, 40, 'T');

// STAGIAIRE
$pdf->MultiCell(130, 40, "<strong>Téléphone : </strong>$telephone<strong> Portable : </strong>$portable", 0, 'L', 1, 0, '', '155', true, 0, true, true, 40, 'T');

// STAGIAIRE
$pdf->MultiCell(160, 40, "<strong>Effectuera un stage pratique qui débutera le </strong>$newDateS<strong> et se terminera le </strong>$newDateE", 0, 'L', 1, 0, '', '160', true, 0, true, true, 40, 'T');

//ARTICLE 2
$pdf->MultiCell(170, 40, "<strong>Art 2 : </strong>Durant ce stage, la présence du stagiaire sera effective selon les horaires de l'entreprise sur la base de 35 heures par semaine. <u>Les dimanches et jours fériés ne sont pas travaillés.</u>", 0, 'L', 1, 0, '', '170', true, 0, true, true, 40, 'T');

// Vertical alignment
$pdf->MultiCell(55, 5, 'Jours de travail', 1, 'C', 1, 0, '', '185', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, 'Horaires matin', 1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, 'Horaires après-midi', 1, 'C', 1, 1, '', '', true, 0, false, true, 40, 'T');

// LUNDI
$pdf->MultiCell(55, 5, 'Lundi', 1, 'C', 1, 0, '', '190', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5,$lundi_mat. ' - ' .$lundi_mat2, 1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5,$lundi_apr. ' - ' .$lundi_apr2, 1, 'C', 1, 1, '', '', true, 0, false, true, 40, 'T');

// MARDI
$pdf->MultiCell(55, 5, 'Mardi', 1, 'C', 1, 0, '', '195', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, $mardi_mat. ' - ' .$mardi_mat2, 1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, $mardi_apr.' - '.$mardi_apr2, 1, 'C', 1, 1, '', '', true, 0, false, true, 40, 'T');

// MERCREDI
$pdf->MultiCell(55, 5, 'Mercredi', 1, 'C', 1, 0, '', '200', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, $mercredi_mat.' - '.$mercredi_mat2, 1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, $mercredi_apr.' - '.$mercredi_apr2, 1, 'C', 1, 1, '', '', true, 0, false, true, 40, 'T');

// JEUDI
$pdf->MultiCell(55, 5, 'Jeudi', 1, 'C', 1, 0, '', '205', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, $jeudi_mat.' - '.$jeudi_mat2, 1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, $jeudi_apr.' - '.$jeudi_apr2, 1, 'C', 1, 1, '', '', true, 0, false, true, 40, 'T');

// VENDREDI
$pdf->MultiCell(55, 5, 'Vendredi', 1, 'C', 1, 0, '', '210', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, $vendredi_mat.' - '.$vendredi_mat2, 1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, $vendredi_apr.' - '.$vendredi_apr2, 1, 'C', 1, 1, '', '', true, 0, false, true, 40, 'T');

// SAMEDI
$pdf->MultiCell(55, 5, 'Samedi', 1, 'C', 1, 0, '', '215', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, $samedi_mat.' - '.$samedi_mat2, 1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 5, $samedi_apr.' - '.$samedi_apr2, 1, 'C', 1, 1, '', '', true, 0, false, true, 40, 'T');

//HORAIRE MODULABLE
$pdf->MultiCell(170, 40, "<em><u>En cas d'horaire modulables, un planning sera réalisé par le tuteur et joint à la présente convention.</u></em>", 0, 'C', 1, 0, '', '235', true, 0, true, true, 40, 'T');

//----------------------------------------------------------

// add a page
$pdf->AddPage();


// ART 3
$pdf->MultiCell(70, 40, "<strong>Art 3 : Objectifs</strong>", 0, 'L', 1, 0, '', '40', true, 0, true, true, 40, 'T');

//Objectifs
$pdf->MultiCell(70, 40, "<strong>Objectif : </strong>".$objectifs, 0, 'L', 1, 0, '', '45', true, 0, true, true, 40, 'T');

//Poste occupé
$pdf->MultiCell(85, 40, "<strong>Poste occupé : </strong>".$poste, 0, 'L', 1, 0, '', '50', true, 0, true, true, 40, 'T');

//Taches à réaliser...
$pdf->MultiCell(70, 40, "<strong>Tâches à réaliser lors du stage :</strong>", 0, 'L', 1, 0, '', '55', true, 0, true, true, 40, 'T');

//Taches #01
$pdf->MultiCell(100, 40, "<strong>• </strong>".$tache1, 0, 'L', 1, 0, '', '60', true, 0, true, true, 40, 'T');
//Taches #02
$pdf->MultiCell(100, 40, "<strong>• </strong>".$tache2, 0, 'L', 1, 0, '', '65', true, 0, true, true, 40, 'T');
//Taches #03
$pdf->MultiCell(100, 40, "<strong>• </strong>".$tache3, 0, 'L', 1, 0, '', '70', true, 0, true, true, 40, 'T');
//Taches #04
$pdf->MultiCell(100, 40, "<strong>• </strong>".$tache4, 0, 'L', 1, 0, '', '75', true, 0, true, true, 40, 'T');


//TUTEUR
$pdf->MultiCell(140, 40, "<strong>Le représentant de l'entreprise, dénommé 'tuteur' et qui encadre le stagiaire sera :</strong>", 0, 'L', 1, 0, '', '85', true, 0, true, true, 40, 'T');

//TUTEUR Nom
$pdf->MultiCell(180, 40, "<strong>Nom : </strong>".$tname."<strong> Fonction : </strong>".$tfonction."<strong> Tél : </strong>".$tphone, 0, 'C', 1, 0, '', '95', true, 0, true, true, 40, 'T');

// ART 4
$pdf->MultiCell(180, 40, "<strong>Art 4 : </strong>Le stagiaire est socialement couvert durant toutes les heures qu'il effectue enentreprise. En cas d'accident, soit pendant le travail, soit au cours du trajet, le chef d'entreprise s'engage à prévenir dans les plus brefs délais à l'Association NOUAS. Par ailleurs, l'Association NOUAS a souscrit une assurance 'responsabilité civile' pour couvrir le stagiaire.", 0, 'L', 1, 0, '', '105', true, 0, true, true, 40, 'T');

// ART 5
$pdf->MultiCell(180, 40, "<strong>Art 5 : </strong>En cas d'absence, maladie ou accident pendant sa période de stage en Entreprise, le stagiaire doit prévenir l'employeur et l'Association NOUAS le jour même.", 0, 'L', 1, 0, '', '125', true, 0, true, true, 40, 'T');

// ART 6
$pdf->MultiCell(180, 40, "<strong>Art 6 : </strong>Engagements des parties :<br>- L'entreprise s'engage à tout mettre en oeuvre pour aider le stagiaire à découvrir les aspects du métier et du monde du travail.<br>- l'Association NOUAS s'engage à suivre le stagiaire durant sa période de stage en entreprise.<br>- Le stagiaire s'engage à respecter le règlement intérieur et s'investir avec sérieux dans les tâches qui lui sont confiées.", 0, 'L', 1, 0, '', '135', true, 0, true, true, 40, 'T');

// ART 7
$pdf->MultiCell(180, 40, "<strong>Art 7 : </strong> Il peut être mis fin à cette présente convention à tout moment de manière concertée entre les parties (Entreprise, NOUAS et Stagiaire).", 0, 'L', 1, 0, '', '160', true, 0, true, true, 40, 'T');

// ART 8
$pdf->MultiCell(180, 40, "<strong>Art 8 : </strong>Cette convention est remplie en 3 exemplaires dont le 1er restera au sein de l'Entreprise d'accueil, le 2ème à l'organisme de formation (NOUAS) et le 3ème au stagiaire", 0, 'L', 1, 0, '', '170', true, 0, true, true, 40, 'T');

//Fait à ... Le ...
$pdf->MultiCell(85, 5, '<strong>Fait à Montpellier le </strong>'.$newDateT, 0, 'C', 1, 0, '', '185', true, 0, true, true, 40, 'T');

// Vertical alignment
$pdf->MultiCell(55, 12, 'Entreprise (Cachet, Nom, Qualité, Signature)', 1, 'C', 1, 0, '', '195', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 12, 'Stagiaire (Nom, Prénom, Signature)', 1, 'C', 1, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 12, 'Centre NOUAS (Cachet, Nom, Qualité, Signature)', 1, 'C', 1, 1, '', '', true, 0, false, true, 40, 'T');

//Close and output PDF document w/ name
$pdf->Output($lname . '_' . $fname .'.pdf', 'I');

?>
