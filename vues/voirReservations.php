<div id="contenu">
<label> Liste de reservations </label>
<table border="1">
<tr>
  <td><strong>Nom</strong></td>
  <td><strong>Prenom</strong></td>
  <td><strong>Numéro de vol</strong></td>
    <td><strong>Nb places </strong></td>
</tr>
<?php
if ($reservation!=null){
    for ($i=0;$i<count($reservation)-1;$i++){
        echo $reservation[$i];
    }
}
?>
</table>
</div>

