<?php

  require_once 'Back/recipesLoader.php';

  foreach(getRecipes() as $recipes){
  $title = $recipes['title'];
  $preparationTime = $recipes['time'];
  $difficulty = $recipes['difficulty'];
  }
  include 'Front/recipe.php';

 /* Même si, dans cet exercice, vous étiez la seule personne à faire les trois éléments, en entreprise, les trois équipes (back, front et intégration) sont souvent composées de personnes différentes. Découper son code ainsi permet de faire en sorte que les trois équipes puissent travailler en parallèle : l'important est de s'être mis d'accord au début.

Le code est également plus clair : si un bloc est mal positionné, on sait que cela vient du fichier recipe.php. En revanche, si une donnée n’apparaît pas, on sait que c'est plutôt du côté du back. Ainsi, notre code est bien plus facile à débugger. */
