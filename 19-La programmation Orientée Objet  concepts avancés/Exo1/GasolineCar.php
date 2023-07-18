<?php

require_once 'Car.php';

class GasolineCar extends Car 
{
  public float $co2emission;

  public function __construct(float $price, string $brand, float $co2emission)
  {
    parent::__construct($price, $brand);
    $this->co2emission = $co2emission;
  }
}