<div>
  <h3><?php echo $title; ?></h3>
  <div>
    Temps d préparation : <?php echo $preparationTime; ?> minutes 
  </div>
  <div>
    Difficulté : <?php
    for ($starNumber = 0; $starNumber < $difficulty; $starNumber++) {
      echo '*';
    } ?>
  </div> 
</div>
  
  <?php /*Pour utiliser recipe.php, il faut renseigner les variables $title, $preparationTime et $difficulty."*/
