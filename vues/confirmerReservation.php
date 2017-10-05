<body>
<div id='contenu'>
<?php
print_r(creerReservations($reservation));

echo "La reservation pour le vol n° ". $reservation['numero']." est confirmée pour le client ". 
        $reservation['prenom']. " ".$reservation['nom'];
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
</div>
</body>