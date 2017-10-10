<?php
function creerPdfReservation($reserv){
 $buffer=ob_get_clean();
    // permet d'inclure la bibliothèque fpdf
require('fpdf/fpdf.php');

// instancie un objet de type FPDF qui permet de créer le PDF
$reservation=new FPDF();
// ajoute une page
$reservation->AddPage();
// définit la police courante
$reservation->SetFont('Arial','B',16);

//Ajoute une image
$reservation->Image('images/avionrouge.jpg',10,10, 64, 48);



// affiche du texte
$reservation->Cell(40,10,"AIR ALLIANCE");

//saut de ligne 
$reservation->Ln(48);

// affiche du texte
$reservation->Cell(30,10,utf8_decode("Resérvation"));

//saut de ligne 
$reservation->Ln();

$reservation->Cell(30,10,"Client : ".$reserv['prenom']." ".$reserv['nom']);

//saut de ligne 
$reservation->Ln();

$reservation->Cell(30,10,utf8_decode("Vol numéro : ".$reserv['numero']));
//saut de ligne 
$reservation->Ln();

$reservation->Cell(30,10,"Nombre de passagers : ".$reserv['nbvoyageurs']);
// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
$reservation->Output();
}

print_r($reserv);
echo "function pdf";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

