<?php

$boxeType = 'boxe anglaise';

switch($boxeType){
    case 'boxe anglaise':
      echo "Poings";
      break;
    case 'savate BF':
    case 'kick-boxing américain':
      echo "Pieds et poings";
      break;
    case 'kick-boxing japonais':
      echo "Poings, pieds et genoux";
      break;
    case 'boxe birmane':
    case 'boxe khmère':
    case 'boxe thaï':
    case 'shoot-boxing':
      default:
      echo"Tout le haut du corps";
}
