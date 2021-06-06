<?php

  class Bank
  {

    public $accno;
    public $name;
    public $balance = 0;

    function __construct($accno = null, $name = null) {
      $this->accno = $accno;
      $this->name = $name;
    }

    function depositAmount($amt){
        $this->balance = $this->balance + $amt;
        return $this;
    }

    function deductAmount($amt){

        if($this->balance <= 0){
            echo "No Balance in the Account." . "<br>" . PHP_EOL;
            return $this;
        }

        if($this->balance < $amt){
            echo "Requested Amount is greater than Balance." . "<br>" . PHP_EOL;
            return $this;
        }

        $this->balance = $this->balance - $amt;

        return $this;
    }

    function checkBalance(){
        echo "Your Balance: $this->balance" . "<br>" . PHP_EOL;
        return $this;
    }
  }

  $bank1 = new Bank(101, "John, Smith");
  $bank1->checkBalance();
  $bank1->depositAmount(500)->checkBalance();
  $bank1->deductAmount(100)->checkBalance();
  $bank1->deductAmount(1000)->checkBalance();
  echo $bank1->checkBalance()->name;

?>
