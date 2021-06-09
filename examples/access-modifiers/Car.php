<?php 

class Car {
  private $speed;
  private $maxSpeed;
  
  function __construct($name = null, $maxSpeed = 150) {
    
    if (!$name || !is_string($name)) {
      echo "Enter correct car name!";
      return;
    }
    
    if (!$this->checkSpeedFormat($maxSpeed)) {
      return;
    }
    
    $this->name = $name;
    $this->maxSpeed = $maxSpeed;
  }
  
  private function checkSpeedFormat($speed) {
    if (!is_numeric($speed) || $speed <= 0) {
      echo "Enter correct speed!";
      return false;
    }
    return true;
  }
  
  private function checkMaxSpeed($speed) {
    if ($speed > $this->maxSpeed) {
      echo "Entered speed is more than max speed";
      return false;
    }
    return true;
  }
  
  function getSpeed() {
    echo "Current speed: $this->speed" . PHP_EOL;
    return;
  }
  
  function setSpeed($speed) {
    if (!$this->checkSpeedFormat($speed)) {
      return;
    }
    if (!$this->checkMaxSpeed($speed)) {
      return;
    }
    $this->speed = $speed;
    return $this;
  }
  
  function changeMaxSpeed($maxSpeed) {
   if (!$this->checkSpeedFormat($maxSpeed)) {
      return;
    }
    $this->maxSpeed = $maxSpeed;
    return $this;
  }
  
  function getMaxSpeed() {
    echo "Max speed: $this->maxSpeed" . PHP_EOL;
    return;
  }
  
  function decreaseSpeed($speed) {
    if (!$this->checkSpeedFormat($speed)) {
      return;
    }
    $newSpeed = $this->speed - $speed;
    if (!$this->checkSpeedFormat($newSpeed)) {
      return;
    }
    $this->speed = $newSpeed;
    return $this;
  }
  
  function increaseSpeed($speed) {
    if (!$this->checkSpeedFormat($speed)) {
      return;
    }
    $newSpeed = $this->speed + $speed;
    if (!$this->checkMaxSpeed($newSpeed)) {
      return;
    }
    $this->speed = $newSpeed;
    return $this;
  }
}

$car = new Car("BMW", 200);
$car->setSpeed(60)->getSpeed();
$car->increaseSpeed(50)->getSpeed();
$car->decreaseSpeed(10)->getSpeed();
$car->getMaxSpeed();
$car->changeMaxSpeed(250)->getMaxSpeed();


?>
