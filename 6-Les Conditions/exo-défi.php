<?php

$vehiculetype ='remorque'; // A changer a chaque réparation

switch($vehiculetype) {
  case 'voiture':
  case 'quad':
    $nbPneus = 4;
  break;
  case 'trike':
    $nbPneus = 3;
  break;
  case 'scooter':
  case 'moto':
    $nbPneus = 2;
  break;
  default:
    $nbPneus = 1;
}

$pneufPrice = $nbPneus * 60;
if ($nbPneus === 4) {
  $pneufPrice *= 0.85;
}

$rouesCoolPrice = $nbPneus * 75;
if ($nbPneus === 3) {
$rouesCoolPrice *= 0.75;
}

if($pneufPrice < $rouesCoolPrice){
  echo "Le fournisseur Pneufs est le plus intéressant";
} else {
  echo "Le fournisseur Roues Cool est le plus intéressant";
}