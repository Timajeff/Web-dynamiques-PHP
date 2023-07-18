<?php
define('Dollar_rate',1.08);
define('Yen_rate',120.34);
define('Bitcoin_rate',0.0004992);

$europrice = 3.12;
$dollarprice = $europrice * Dollar_rate;
$yenprice = $europrice * Yen_rate;
$bitcoinprice = $europrice * Bitcoin_rate;


echo $europrice.' euros = '.$dollarprice.' dollars, '.$yenprice.' yens et '.$bitcoinprice.' bitcoin.';