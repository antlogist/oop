<?php

class Doctor {
  protected $hr;
  protected $rate;
  
  function __construct($hr = 10, $rate = 35) {
    $this->hr = $hr;
    $this->rate = $rate;
  }
  
  function calculateFees() : int {
    return $this->rate * $this->hr;
  }
}

class Neurolog extends Doctor {
  public $k;
  
  function __construct($k = 1, Doctor $doctor) {
    $this->k = $k;
    $this->hr = $doctor->hr;
    $this->rate = $doctor->rate;
  }
  
  function calculateFees() : int {
    return $this->rate * $this->hr * $this->k;
  }
  
}

$doctor = new Doctor();
echo $doctor->calculateFees() . PHP_EOL;

$neurolog = new Neurolog(2, $doctor);
echo $neurolog->calculateFees() . PHP_EOL;

