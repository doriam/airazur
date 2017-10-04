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
            <fieldset>
                <legend> Réservation du vol n° <?php echo $numero ?> </legend>
                <form name="formReservation" action="index.php?action=validerReservation" method="POST">

                    <label> Nom  *</label>    <input type="text" name="nom" value="" /><br>
                    <label> Prenom  *</label> <input type="text" name="prenom" value="" /><br>
                    <label> Email  * </label> <input type="text" name="mail" value="" /><br>
                    <label> Adresse * </label> <input type="text" name="adresse" value="" /><br>
                    <label> Nombre de places  </label>* <input type="text" name="nbvoyageurs" value="1" /><br><br><br>

                    <input type="submit" value="Valider" />
                    <input type="submit" value="Annuler" />

                    <input type='hidden' value='<?php echo $numero ?>' name='numero'>
                </form>
            </fieldset>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
