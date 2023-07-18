<?php
function greetingsTO(string $name, int $age = null)
{
    echo sprintf('Bonjour, je m\'appelle %s', $name). PHP_EOL;

    if (!empty($age)) {
      echo sprintf('J\'ai %s ans', $age) . PHP_EOL;
    }
    
}

greetingsTO('Jules', 27);
greetingsTO('Sophia');