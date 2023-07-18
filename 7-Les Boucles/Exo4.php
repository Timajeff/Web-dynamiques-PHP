<!doctype html>
<html>
  <head></head>
  <body>
    <h1>Liste des Ventes Annuelles</h1>
    <ul>
      <?php
        $sales = [
          'janvier' => 64,
          'fevrier' => 45,
          'mars' => 32,
          'avril' => 45,
          'mai' => 35,
          'juin' => 47,
          'juillet' => 68,
          'aout' => 76,
          'septembre' => 43,
          'octobre' => 23,
          'novembre' => 83,
          'decembre' => 15,
        ];
        $total = 0;
        $LastMonthquantity = 0;
        foreach($sales as $month => $quantity) {
          echo '<li>'.$month.' : '.$quantity.($LastMonthquantity < $quantity ? '+' : '-').'</li>';
        $LastMonthquantity = $quantity; 
        $total += $quantity;
        }
        
      ?>
    </ul>
    Total :
    <?php
      echo $total;
    ?>
  <body>
</html>