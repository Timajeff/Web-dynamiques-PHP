<?php
function increaseToTwenty(int $start): void {
    echo $start.PHP_EOL;
        
    if ($start < 20) {
        $start += 2;
        increaseToTwenty($start);
    }
}
increaseToTwenty(0);
