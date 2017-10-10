<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Air Azur</title>
        <script language="javascript" src="javascript/functionsJS.js">
        </script>
            
    </head>
    <body>
        <div id="bandeau">
            <h3> Confirmer reservation </h3>
            <div id="conteneur">
                <h4> Information du vol </h4> 
                <?php
                   $info=getInfoReserv($numero);
                   
                   foreach ($info as $valeursInfo) { ?>
                <b> Vol : </b> <?php echo $valeursInfo['NUMVOL'] ;?></br>
                <b>  Départ : </b> <?php echo $valeursInfo['depart'];?> - <?php echo $valeursInfo['paysDepart'];?> </br>
                <b>   Arrivée : </b> <?php echo $valeursInfo['arrivee'];?> - <?php echo $valeursInfo['paysArrivee'];?></br>
                <b>    Prix : </b> <?php echo $valeursInfo['PRIX']." €";
                   } ?>
                    </br>      
            </div>
            <div id="conteneur">
            <fieldset>
                <legend> Réservation du vol n° <?php echo $numero ?> </legend>
                <form name="formReservation" action="index.php?action=validerReservation" method="POST" onSubmit="return validation();">

                    <label> Nom  *</label>    <input type="text" name="nom" id="nom" /><br>
                    <label> Prenom  *</label> <input type="text" name="prenom" id="prenom" /><br>
                    <label> Email  * </label> <input type="text" name="mail" id="mail" /><br>
                    <label> Adresse * </label> <input type="text" name="adresse" id="adresse"/><br>
                    <label> Nombre de places  </label>* <input type="text" name="nbvoyageurs" id="nbvoyageurs" value="1" /><br><br><br>

                    <input type="submit" value="Valider" />
                    <input type="reset" value="Annuler" onclick="voirvols.php" />

                    <input type='hidden' value='<?php echo $numero ?>' name='numero'>
                </form>
            </fieldset>
        </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
