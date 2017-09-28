<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="contenu">
        <?php
        // put your code here
          echo "Page de vols <br> ";
         
    foreach($lesVols as $unVol) { ?>
    Vol : <?php echo $unVol['numVol'] ;?></br>
    Départ : <?php echo $unVol['libelle'];?> - <?php echo $unVol['pays'];?> </br>
    Arrivée : <?php echo $unVol['libelle2'];?> - <?php echo $unVol['pays2'];?></br>
    Prix : <?php echo $unVol['prix'];?></br>
    Places : <?php echo $unVol['nbPlaces'];?></br>
    <?php echo '<a href="index.php?action=formReservation&numero='.$unVol['numVol'].'">Réserver</a></br></br>';
}
    ?>
</div>

    </body>
</html>
