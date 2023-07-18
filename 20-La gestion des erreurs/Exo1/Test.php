<?php

function greetings($firstName, $lastName)
{
    echo sprintf('Bonjour %s %s', $firstName, $lastName);
}
$name = 'Ulrich';
$age = 25;
$defaultRole = DEFAULT_ROLE; /* déclenchera un warning, car on essaie d'assigner à la variable une constante qui n'a pas été définie. Cela ne provoquera pas d'arrêt du script. */
echo $city; /* déclenchera quant à elle un notice, car $city n'est pas définie. */
greetings($name); /* une erreur fatale sera déclenchée lors de l'appel greetings($name);, car l'un des paramètres requis n'a pas été instancié. */
