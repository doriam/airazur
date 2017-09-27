<?php
require dirname(__FILE__). "\connect.php";
function getLesVols(){
    
// Déclaration d’un tableau
$vols = array();

  // Appel au fichier permettant la connection à la BD
 $connexion= connect();
			if ($connexion)	
			{
  // connexion réussie
 $bdd= mysql_select_db("airazur",$connexion);
 
// Requete de selction des vols
 $requete= "select numVol, aeroport.libelle, aeroport.pays, aeroport2.libelle, aeroport2.pays, dateDepart, heureDepart, dateArrivee, heureArrivee, prix from vol JOIN aeroport JOIN aeroport2 where vol.idDepart=aeroport.id AND vol.idArrivee=aeroport2.idArrivee" ;
  
  $resultat= mysql_query($requete,$connexion);

  while($ligne=mysql_fetch_array($resultat))
  	{
    
   $unVol = [];

// Remplissage du tableau $unVol
$i=0;

 // Remplissage du tableau multi-dimensionnel $vols 
    //for ($r=0;$r<$i;$r++){
     //  array_push($vols, $unVol[$r]);
   //}
         
        
		}
  
	}

else
{
  echo "problème lors de la connexion <br />";
}
mysql_close($connexion);



return $vols;

}

print_r (getLesVols());
/* 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

