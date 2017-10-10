<body>
<div id="bandeau">
    <h1> Liste de réservations </h1>
        <div id="conteneur">
<?php

if ($lesreservations!=null){
    echo "<table id='reservations'>
<tr>
  <th><strong>Nom</strong></th>
  <th><strong>Prenom</strong></th>
  <th><strong>Numéro de vol</strong></th>
    <th><strong>Nb places </strong></th>
    <th><strong>Supprimer </strong></th>
    <th><strong>Télécharger </strong></th>
</tr>";
    for ($i=0;$i<count($lesreservations);$i++){
      echo  "<tr> 
        <td> ".$lesreservations[$i]['nom']."</td>".
        "<td> ".$lesreservations[$i]['prenom']."</td>
        <td> ".$lesreservations[$i]['numero']."</td>".
        "<td> ".$lesreservations[$i]['nbvoyageurs']."</td>
        <td><a href='index.php?action=SupprimerReservation&numReservation=".$i."'><img src='images/supprimer.png' width=50 heigth=50></a></td>
        <td><a href='index.php?action=pdfReservation&numReservation=".$i."'><img src='images/pdf.png' width=50 heigth=50></a></td></tr>";
    }
}
else {
    echo "<h4> Vous n'avez pas encore fait des réservations </h4>";
}

?>

</table>
        </div>
</div>
</body>

