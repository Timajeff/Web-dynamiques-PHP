<?php 

$isGroupFull = false;
$isPlaneAvailable = true;
$isDestinationDangerous = true;

// Cette variable décide du départ
$canWeGo1 = $isGroupFull || !$isDestinationDangerous;
$canWeGo2 = $isDestinationDangerous && (!$isGroupFull || $isPlaneAvailable);  

if ($canWeGo1) {
  echo 'Départ imminent !';
}

if ($canWeGo2) {
  echo 'Départ imminent !';
}