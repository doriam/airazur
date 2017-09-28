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
        
if(!isset($_REQUEST['action']))
    $action = 'accueil';
else
    $action = $_REQUEST['action'];

// vue qui crée l’en-tête de la page
include("vues/entete.php") ;

switch($action)
{
    case 'accueil':
	  // vue qui crée le contenu de la page d’accueil
        //include("vues/entete.php");
        include("vues/accueil.php");
        break;
  case 'voirvols':
	  // vue qui crée le contenu de la page d’accueil
        //include("vues/entete.php");
         $lesVols= getLesVols();
        include("vues/voirvols.php");
        break;
  case 'voireserv':
	  // vue qui crée le contenu de la page d’accueil
        //include("vues/entete.php");
        include("vues/voireserv.php");
        break;
}

// vue qui crée le pied de page
include("vues/pied.php") ;
 //test modification

?>
    </body>
</html>
