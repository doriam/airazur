<?php
require 'connect.php';
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

$x=getLesVols();
print_r($x);

/* 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

