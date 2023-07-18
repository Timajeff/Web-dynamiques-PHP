<?php

function increaseToTwenty() {   
    static $start = 10;
    echo $start . PHP_EOL;
        
    if ($start < 20) {

        $start = $start + 2;
        increaseToTwenty();
    }
}
increaseToTwenty();

global $city;
$city = 'Paris';
print_r($GLOBALS['city']);