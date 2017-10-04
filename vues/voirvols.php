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
    Vol : <?php echo $unVol['NUMVOL'] ;?></br>
    Départ : <?php echo $unVol['depart'];?> - <?php echo $unVol['paysDepart'];?> </br>
    Arrivée : <?php echo $unVol['arrivee'];?> - <?php echo $unVol['paysArrivee'];?></br>
    Prix : <?php echo $unVol['PRIX'];?></br>
    Places : <?php echo $unVol['NBPLACES'];?></br>
    <?php echo '<a href="index.php?action=formReservation&numero='.$unVol['NUMVOL'].'">Réserver</a></br></br>';
}
    ?>
</div>

    </body>
</html>
