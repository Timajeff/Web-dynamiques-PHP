<?php
$boxer1Weight = 54.4;
$boxer2Weight = 70.2;

if($boxer1Weight >= 90.7 && $boxer2Weight >= 90.7){
 echo "FIGHT POIDS LOURDS !";
  } else if(($boxer1Weight >= 79.3 && $boxer1Weight <= 90.7) && ($boxer2Weight >= 79.3 && $boxer2Weight <= 90.7)) {
      echo "FIGHT POIDS LOURDS-LEGERS !";
  } else if (($boxer1Weight <= 79.3 && $boxer1Weight >= 76.2) &&( $boxer2Weight <= 79.3 && $boxer2Weight > 76.2)) {
      echo "FIGHT POIDS MI-LOURDS !";
  } else {
    echo "Impossible de Combattre .";
  }