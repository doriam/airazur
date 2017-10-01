<?php
require 'connect.php';

function getLesVols()
{
$bdd = connect();
    $sql = $bdd->query("select numVol, a1.libelle as depart ,a2.libelle as arrivee, a1.pays as paysDepart ,a2.pays as paysArrivee, dateDepart, heureDepart, dateArrivee, heureArrivee, prix, nbPlaces from vol, aeroport as a1, aeroport as a2 where vol.idDepart=a1.id AND vol.idArrivee=a2.id");
       
   $vols = $sql->fetchAll() ;
   $sql->closeCursor();
    
   return ($vols);
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

