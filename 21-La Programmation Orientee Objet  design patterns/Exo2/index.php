<?php
interface AnimalInterface
{
  public function getSoundType(): string;
}

class Dog implements AnimalInterface
{
  public function getsoundtype(): string
  {
    return 'Aboiement';
  }
}

class Cat implements AnimalInterface
{
  public function getSoundType(): string
  {
    return 'Miaulement';
  }
}

class Horse implements AnimalInterface
{
  public function getSoundType(): string
  {
    return 'Hennisement';
  }
}

class AnimalFactory
{
  public static function load(string $animalType): AnimalInterface
  {
    switch ($animalType) {
      case 'dog':
        return new Dog();
        break;
      case 'cat':
        return new Cat();
        break;
      case 'horse':
        return new Horse();
        break;
      default:
        throw new Exception();
        break;
    }
  }
}

$animalTypes = ['horse', 'dog', 'mice', 'cat', 'lion'];

foreach ($animalTypes as $animalType) {
  try {
    $animal = AnimalFactory::load($animalType);
    echo sprintf("%s : %s <br/>", $animalType, $animal->getSoundType());
  } catch (Exception $e) {
    echo sprintf("%s : Cet animal n'est pas implémentée dans notre système <br/>", $animalType);
  }
}
