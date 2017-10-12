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
    
    initPanier();
    ajouterAuPanier($reservation);
    creerReservations($reservation);
    
    return $reservation;
}

function creerReservations($reservation){
    $connexion= connect();
       if ($connexion)
        {
           $requete= "insert into reservation values('null','".htmlspecialchars($reservation['nom'])."','".htmlspecialchars($reservation['prenom'])."','".htmlspecialchars($reservation['mail'])."','".htmlspecialchars($reservation['adresse'])."','".$reservation['nbvoyageurs']."','".$reservation['numero']."')";
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


function getLesReservationsPanier() {
    if (isset($_SESSION['reservations']) && count($_SESSION['reservations'])!=0){
        return $_SESSION['reservations'];
    }
    else{
        return Null;
    }
    }
    
 function  getLesReservations () {
        $lesReservations= getLesReservationsPanier();
        return $lesReservations;
 }

 
 function getLaReservation(){
     $numReserv=$_REQUEST['numReservation'];
     $laReservation=$_SESSION['reservations'][$numReserv];
     return $laReservation;
 }
 
 function getInfoReserv($numero){
     $connex= connect();
     $req="SELECT NUMVOL, a1.LIBELLE as depart, a2.LIBELLE as arrivee, a1.PAYS as paysDepart, a2.PAYS as paysArrivee, DATEDEPART, HEUREDEPART, DATEARRIVEE, HEUREARRIVEE, PRIX, NBPLACES FROM vol, aeroport as a1, aeroport as a2 where vol.ID_DEPART=a1.ID and vol.ID_ARRIVEE=a2.ID and vol.NUMVOL='$numero'";
     $result=$connex->query($req);
     while ($ligne=$result->fetch(PDO::FETCH_ASSOC)){
         $info[]=$ligne;
     }
     return $info;
 }
 
function supprimer ($reserv){

    $id=$_REQUEST['numReservation'];
      if (isset($_SESSION['reservations'][$id])==1)
	{
                   unset ($_SESSION['reservations'][$id]);
	}
        else {
            unset($_SESSION['reservations']);
        }
      
        $_SESSION["reservations"] = array_values($_SESSION["reservations"]);
        
    header('location:index.php?action=voirReservations');

}


