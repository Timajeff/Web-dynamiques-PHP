<?php

$numbertoAdd = 7;
$add = function ($n) use ($numbertoAdd)
{
    return ($n + $numbertoAdd);
};
$array = range(1, 27, 3);
print_r(array_map($add, $array));