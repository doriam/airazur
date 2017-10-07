<body>
<div id="bandeau">
    <div id="contenu">
<table id="reservations">
    <tr> Liste de reservations </tr>
<tr>
  <th><strong>Nom</strong></th>
  <th><strong>Prenom</strong></th>
  <th><strong>Numéro de vol</strong></th>
    <th><strong>Nb places </strong></th>
    <th><strong>Télécharger </strong></th>
</tr>
<?php

if ($lesreservations!=null){
    for ($i=0;$i<count($lesreservations);$i++){
      echo  "<tr> 
        <td> ".$lesreservations[$i]['nom']."</td>".
        "<td> ".$lesreservations[$i]['prenom']."</td>
        <td> ".$lesreservations[$i]['numero']."</td>".
        "<td> ".$lesreservations[$i]['nbvoyageurs']."</td>
        <td><a href='index.php?action=pdfReservation&numReservation=".$i."'><img src='images/pdf.png' width=50 heigth=50></a></td></tr>";
    }
}
 
 
?>

</table>
    </div>
</div>
</body>

