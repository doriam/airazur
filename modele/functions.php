<?php

function getLesVols()
{   
// Déclaration d’un tableau
$vols = array();
  // Appel au fichier permettant la connection à la BD
 require //dirname(__FILE__). // 
 'Connexionbdd.php';

// Selection de la base de données et requete SQL
$unVol="SELECT  * from   vol  ";

// Remplissage d’un tableau correspondant à chaque vol
$i=0;

 // Remplissage du tableau multi-dimensionnel $vols avec chacun des vols
   for ($r=0;$r<$i;$r++){
       array_push($vols, $unVol[$r]);
   }


// Retourner le tableau
return $vols;
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

