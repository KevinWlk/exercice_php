<?php
require './vehicule.php';

$voiture = new Vehicule ("Mercedes CKL", 4, 240);
$moto = new Vehicule ("HONDA CBR", 2, 310);


echo $voiture->detect();
echo"<br>";
echo $moto->detect();
echo"<br>";
echo $voiture->boost();
echo"<br>";

echo "le véhicule le plus rapide est : " . $moto->plusRapide($voiture) . "car la $moto roule à " . $moto->getVitesse() . "km/h alors que la $voiture roule à " . $voiture->getVitesse() . "km/h.";



?>
