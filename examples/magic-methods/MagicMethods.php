<?php

class User {
  
  private $name;
  
  function __construct() {
    echo "__construct()" . PHP_EOL;
  }
  
  function __set($name, $value) {
    echo $name . PHP_EOL;
    echo $value . PHP_EOL;
    $this->name = $value;
    echo "__set()" . PHP_EOL;
  }
  
  function __get($name) {
    echo $name . PHP_EOL;
    echo "__get()" . PHP_EOL;
    return $this->name;
  }
  
  function __toString() {
    echo "__toString()" . PHP_EOL;
    return $this->name;
  }
  
  function __debugInfo() {
    echo "__debugInfo()" . PHP_EOL;
  }
  
  function __destruct() {
    echo "__destruct()" . PHP_EOL;
  }
}

$user = new User();
$user->name = "Anthony";
echo $user->name;
echo $user;
var_dump($user);

