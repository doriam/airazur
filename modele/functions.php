<?php

require 'connect.php';

function getLesVols() {
    $bdd = connect();
    $sql = $bdd->query("SELECT NUMVOL, a1.LIBELLE as depart, a2.LIBELLE as arrivee, a1.PAYS as paysDepart, a2.PAYS as paysArrivee, DATEDEPART, HEUREDEPART, DATEARRIVEE, HEUREARRIVEE, PRIX, NBPLACES FROM vol, aeroport as a1, aeroport as a2 where vol.ID_DEPART=a1.ID and vol.ID_ARRIVEE=a2.ID");

    $vols = $sql->fetchAll();
    $sql->closeCursor();

    return ($vols);
}

function reserverVol() {
    // récup numéro vol
    $numero = $_REQUEST["numero"];
    return $numero;
}

function validerReservation() {
    $reservation = array();
    // récupération du numéro
    $numero = $_REQUEST["numero"];
    $reservation["numero"] = $numero;
    // faire de même les autres paramètres…
    $nom=$_REQUEST["nom"];
    $reservation["nom"] = $nom;
    $prenom=$_REQUEST["prenom"];
    $reservation["prenom"] = $prenom;
    $mail=$_REQUEST["mail"];
    $reservation["mail"] = $mail;
    $adresse=$_REQUEST["adresse"];
    $reservation["adresse"] = $adresse;
    $nbvoyageurs=$_REQUEST["nbvoyageurs"];
    $reservation["nbvoyageurs"] = $nbvoyageurs;
    return $reservation;
}

function creerRelations($reservation){
    $connexion= connect();
       if ($connexion)
        {
           $requete= "insert into reservation values('2','".htmlspecialchars($reservation['nom'])."','".htmlspecialchars($reservation['prenom'])."','".htmlspecialchars($reservation['mail'])."','".htmlspecialchars($reservation['adresse'])."','".$reservation['nbvoyageurs']."','".$reservation['numero']."')";
           $connexion->query($requete);
        }
        else {
            echo "Problème de connèxion";
        }
        
        return $reservation;
}

function initPanier() {
//// fonction qui initialise le panier
// le panier est un tableau indexé mis en session avec la clé "reservations"
    if (!isset($_SESSION['reservations']))
        $_SESSION['reservations'] = array();
}

// fonction qui ajoute une réservation au panier
function ajouterAuPanier($reservation) {
    $_SESSION['reservations'][] = $reservation;
}

//print_r(getLesVols());
/*
function getLesVols()
{
    
// Déclaration d’un tableau
$vols = array();

  // Appel au fichier permettant la connection à la BD

 $connexion= connect();
			if ($connexion)	
			{
                            
  // connexion réussie
 // mysql_select_db("airazur",$connexion);
 
// Requete de selction des vols
 $requete= "select numVol, aeroport.libelle, aeroport.pays, aeroport2.libelle, aeroport2.pays, dateDepart, heureDepart, dateArrivee, heureArrivee, prix from vol JOIN aeroport JOIN aeroport2 where vol.idDepart=aeroport.id AND vol.idArrivee=aeroport2.idArrivee" ;
  $result=$connexion->query($requete);
  while($row=$result->fetch(PDO::FETCH_OBJ)){
     
      $vols[]=$row;
     
   }
     return $vols;
	}
else
{
  echo "problème lors de la connexion <br />";
}
mysql_close($connexion);

return $vols;

}
*/
//print_r (getLesVols());


/* 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

