<?php
// Mettez ici votre plan de bataille
$goldCoinsInYourPocket = 2;
$heroOpensTheChest = true;
$goDownAtTheStairs = false;
$doYouTrustGoblins = true;
// Ne touchez plus à rien à partir de là
if ($goldCoinsInYourPocket > 10) {
  echo 'Votre bourse déborde et toutes les pièces tombent sur le sol. Il ne vous en reste plus que 10.<br>';
  $goldCoinsInYourPocket = 10;
}
echo 'Vous pénétrez dans l\'antre du sorcier... Un coffre se situe à droite et une porte est à gauche<br>';

$hasSword = false;
if ($heroOpensTheChest && $goldCoinsInYourPocket > 3) {
  echo 'Le coffre était en réalité un monstre qui avait l\'apparence d\'un coffre ! Il se réveille grâce à la forte odeur d\'or qui émane de votre bourse et vous dévore.<br>FIN =(';
  return;
} elseif ($heroOpensTheChest && $goldCoinsInYourPocket <= 3) {
  echo 'En ouvrant le coffre, vous vous rendez compte qu\'il est rempli de dents. C\'est en réalité un monstre ayant l\'apparence d\'un coffre ! Heureusement, il semble endormi, ce qui vous permet de récupérer son contenu : <b>une épée</b> !<br>';
  $hasSword = true;
}

echo 'Vous vous dirigez vers la porte et l\'ouvrez pour vous retrouver face à un escalier en colimaçon. Vous pouvez soit monter à l\'étage, soit descendre au sous-sol.<br>';

$hasShield = false;
if (!$goDownAtTheStairs) {
  echo 'Vous montez les escaliers et ouvrez la porte du premier étage. Un gobelin vous y attend et vous propose de vous vendre un objet utile pour 2 pièces d\'or.<br>';
  if ($doYouTrustGoblins && $goldCoinsInYourPocket < 2) {
    echo 'Vous n\'avez pas assez d\'argent pour le gobelin. De rage, ce dernier sort une dague et vous la plante dans le ventre.<br>FIN =(';
    return;
  } elseif ($doYouTrustGoblins && $goldCoinsInYourPocket >= 2) {
    echo 'Vous lui donnez deux pièces d\'or. Un peu étonné, il les prend et disparaît derrière une armoire quelques instants, avant de ressortir avec <b>un bouclier</b> flambant neuf ! Il n\'y a plus rien à faire à l\'étage, vous redescendez au sous-sol.<br>';
    $hasShield = true;
    $goldCoinsInYourPocket -= 2;
  } else {
    echo 'Vous ne faites pas confiance au gobelin. Vous fermez la porte et redescendez au sous-sol.<br>';
  }
}

echo 'Vous descendez en direction du sous-sol. À chaque marche, des chants démoniaques se font entendre de plus en plus clairement. Le sorcier est en bas, et, si vous n\'intervenez pas, les démons envahiront notre monde. Vous arrivez finalement en bas et voyez le sorcier au milieu d\'un pentagramme illuminé d\'une couleur rouge sang. Il vous regarde en souriant, puis, sans crier gare, incante une boule de feu qu\'il envoie dans votre direction !<br>';

if (!$hasShield) {
  echo 'Sans protection, vous vous prenez la boule de feu de plein fouet. Vous n\'êtes plus qu\'un petit tas de cendres fumant.<br>FIN =(';
  return;
}

echo 'Vous vous protégez de justesse avec votre bouclier, qui se désintègre sous la violence du choc. Le sorcier ne s\'attendait pas à vous voir encore en vie, ce qui vous permet de foncer vers lui avant qu\'il ne relance un sort.<br>';

if ($hasSword) {
  echo 'D\'un coup d\'épée net, vous lui coupez la tête. La lumière du pentagramme diminue progressivement avant de s\'éteindre. Vous avez sauvé le monde de l\'invasion des démons ! Vous sortez de l\'antre du sorcier en sueur.<br>';
} else {
  echo 'Vous le plaquez au sol et le rouez de coups de poings. Hélas, ça ne suffit pas et il se dégage d\'un coup de pied. Vous tombez au sol pendant qu\'il incante une nouvelle boule de feu qui, cette fois, vous touche de plein fouet.<br>FIN =(';
  return;
}
