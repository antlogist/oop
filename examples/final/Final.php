<?php 

// Assignments: Create a Bank and User Class and use final Keyword
final class Bank {
  public $accType;
  public $userName;
  
  function __construct($accType = "Deposit", $userName = "Anthony") {
    $this->accType = $accType;
    $this->userName = $userName;
  }
  
  final function getAccType() {
    return $this->accType;
  }
}

class User extends Bank {
  function getAccType() {
    parent::getAccType();
  }
}

$user = new User();

echo $user->accType;
echo $user->getAccType();
