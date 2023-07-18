<?php

ini_set('display_errors', 'off'); // Désactive l'affichage des erreurs.

// on vérifie ques les deux variables nombre 1 et 2 sont bien définis
if (isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
  // On vérifie si il s'agit de numériques
  if (is_numeric($_GET['nombre1']) && is_numeric($_GET['nombre2'])) {
    // On vérifie qu'on ne fait pas de division par zero
    if ((int)$_GET['nombre2'] !== 0) {
      $division = $_GET['nombre1'] / $_GET['nombre2'];

      echo $division;
    } else {
      echo 'Vous ne pouvez pas diviser un nombre par zéro';
    }
  } else {
    echo 'Vous devez fournir des nombres';
  }
} else {
  echo 'Vous devez définir deux paramètres';
}
