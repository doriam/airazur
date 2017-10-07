<?php
// permet d'inclure la bibliothèque fpdf
require('../fpdf/fpdf.php');

// instancie un objet de type FPDF qui permet de créer le PDF
$pdf=new FPDF();
// ajoute une page
$pdf->AddPage();
// définit la police courante
$pdf->SetFont('Arial','B',16);
// affiche du texte
$pdf->Cell(40,10,'Voici un Pdf !');
// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
$pdf->Output();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

