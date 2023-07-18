<?php
$tries = 0;
$sticksNumber = 15;
// Contenu de la boucle
  while($sticksNumber > 1){
  $removedSticks = rand(1, 3);
  $playerNumber = ($tries % 2) + 1;
  $sticksNumber -= $removedSticks;
  echo 'Joueur '.$playerNumber.' retire '.$removedSticks.' bâtons. Il en reste '.$sticksNumber.'<br>';
  $tries++;
  }