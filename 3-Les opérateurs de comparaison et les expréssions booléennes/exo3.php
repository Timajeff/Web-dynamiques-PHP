<?php 
$walletAmount = 501;

$isEmpty = $walletAmount === 0;
$hasLowAmount = $walletAmount >= 5 && $walletAmount <= 10;
$isVip = $walletAmount > 500;

if ($isEmpty) {
  echo 'Votre porte-monnaie est vide';
}

if ($hasLowAmount) {
  echo 'Consultez notre rayon \'promotions\' !';
}

if ($isVip) {
  echo 'Le rayon VIP vous attend !';
}