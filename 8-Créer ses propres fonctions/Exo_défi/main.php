<?php

function greetings(string $name,int $age, array $favoritelanguages = []){

  echo(sprintf("Bonjour, je m'appelle %s et j'ai %s ans. ". PHP_EOL, $name, $age));

  if(empty($favoritelanguages)){

    echo "Je n'ai pas de langage de programmation favori". PHP_EOL;
  } else {

    echo(sprintf("J'ai %s langages de programmation favoris, il s'agit de : %s". PHP_EOL, count($favoritelanguages), implode(' ,',$favoritelanguages)));
  } 

    echo (sprintf('La fonction a été exécuté %s fois. ' .PHP_EOL, countgreetings()));
}

function countgreetings(){
    static $count = 0;

    return ++$count;
}
 
  greetings('Laure', 25, ['Python','C#']);
  greetings('Anna', 29);