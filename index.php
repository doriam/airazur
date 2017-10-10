<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="css/cssGeneral.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <title>Air Azur</title>
    </head>
    <body>
        <?php
        session_start();
        require_once("modele/functions.php");

        if (!isset($_REQUEST['action']))
            $action = 'accueil';
        else
            $action = $_REQUEST['action'];

// vue qui crée l’en-tête de la page
        include("vues/entete.php");

        switch ($action) {
            case 'accueil':
                // vue qui crée le contenu de la page d’accueil
                include("vues/accueil.php");
                break;
            case 'voirvols':
                // vue qui crée le contenu de la page d’accueil
                $lesVols = getLesVols();
                include("vues/voirvols.php");
                break;
            case 'reserver':
                // vue qui crée le contenu de la page d’accueil
                $numero= reserverVol();
                include("vues/formulaireReservation.php");
                break;
            case 'voirReservations' :
                $lesreservations=getLesReservations();
                include("vues/voirReservations.php");
                break;
            case 'validerReservation':
                $reservation= validerReservation();
                include ("vues/confirmerReservation.php");
                break;
            case 'pdfReservation':
                $reserv= getLaReservation();
                include ("vues/pdf_Reservation.php");
                creerPdfReservation($reserv);
                break;
             case 'SupprimerReservation':
                $reserv= getLaReservation();
                $numR= supprimer($reserv);
                //include ("vues/voirReservations.php");
                break;
        }

// vue qui crée le pied de page
        include("vues/pied.php");
        ?>
    </body>
</html>
