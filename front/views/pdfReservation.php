<?php 

include_once "../core/offreC.php";

if (isset($_POST['id_offre']) and isset($_POST['FirstName']) and isset($_POST['LastName']) and isset($_POST['Email'])and isset($_POST['job'])and isset($_POST['Phone'])and isset($_POST['Address'])){


	$panier1=new panier($_POST['id_offre'],$_POST['FirstName'],$_POST['LastName'],$_POST['Email'],$_POST['job'],$_POST['Phone'],$_POST['Address']);


$panier1C=new panierC();

$panier1C->ajouterpanier($panier1);

}else{
	echo "vérifier les champs";
}


if(isset($_POST["id_offre"]) )
{
$idrecup=$_POST["id_offre"];
}
$offre1C=new offreC();
$o=$offre1C->recupereroffre($idrecup);

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',30);
$pdf->cell(180,10,'Reservation',0,0,'C');
$pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(300,10,"Esprit GYM",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"1,2 rue Andre Ampere -2083- pole Technologique - El Ghazala",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"23814764",0,0,'C');
$pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->cell(50,10,'votre reservation :',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(50,10,'pack',1,0,'C');
$pdf->cell(60,10,'duree /Month',1,0,'C');
$pdf->cell(70,10,'prix',1,0,'C');
$pdf->Ln(); 
foreach ($o as $row) {
	$pdf->cell(50,10,$row['name'],1,0,'C');
	$pdf->cell(60,10,$row['duree'],1,0,'C');
	$pdf->cell(70,10,$row['prix'],1,0,'C');
	$pdf->Ln(20);
}


$pdf->Ln(20);
$pdf->SetFont('Arial','B',20);
$pdf->cell(50,10,'Client:',0,0,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Ln();
$pdf->cell(40,10,'nom',1,0,'C');
$pdf->cell(60,10,'prenom',1,0,'C');
$pdf->Ln();
$pdf->cell(40,10,$_POST['FirstName'],1,0,'C');
$pdf->cell(60,10,$_POST['LastName'],1,0,'C');
$pdf->Ln();

$pdf->cell(5,10,"Nb:Au cas d'annulation de la réservation Veuillez nous envoyer un mail :EspritGYM@gmail.com ");
$pdf->Ln();
$pdf->cell(5,5,"en presiciant votre nom,prenom,numero telephone,le pack choisie");

$pdf->Output();

?>