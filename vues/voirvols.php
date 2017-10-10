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
        <div id="bandeau">
          <h1> VOLS DISPONIBLES </h1>
            <div id="conteneur">          
        <?php
        // put your code here
         
    foreach($lesVols as $unVol) { ?>
                <b> Vol : </b> <?php echo $unVol['NUMVOL'] ;?></br>
                <b> Départ : </b> <?php echo $unVol['depart'];?> - <?php echo $unVol['paysDepart'];?> </br>
                <b> Arrivée : </b> <?php echo $unVol['arrivee'];?> - <?php echo $unVol['paysArrivee'];?></br>
                <b> Prix : </b> <?php echo $unVol['PRIX']." €";?></br>
                    <b> Places :</b> <?php echo $unVol['NBPLACES'];?></br>
    <?php echo '<a href="index.php?action=reserver&numero='.$unVol['NUMVOL'].'">RESERVER</a></br></br>';
}
    ?>
            </div>  
            <div style="clear:both"></div>
        </div>
    </body>
</html>
