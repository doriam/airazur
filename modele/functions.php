<?php

//Connection à la base de données
function connect_db(){
    $host="localhost";
    $user="root";
    $mdp="";
    $bdd="airazur";

    $mysqli= new mysqli($host, $user, $mdp, $bdd);

    if ($mysqli->errno){
        echo "Erreur de connéxion à la base de données: (".$mysqli->errno.") ".$mysqli->connect_er;
    }
}

function getLesVols($mysqli)
{   
// Déclaration d’un tableau
$vols = array();
  // Appel au fichier permettant la connection à la BD
 require //dirname(__FILE__). // 
 "/functions.php";

// Selection de la base de données et requete SQL
$sqlVols="SELECT ";


// Remplissage d’un tableau correspondant à chaque vol


 // Remplissage du tableau multi-dimensionnel $vols avec chacun des vols
   


// Retourner le tableau

return $vols;

}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

