<?php 
  class Bank {
    public $accno;
    public $name;
    public $balance;

    function depositAmount($amt) {
      $this->balance = $this->balance + $amt;
    }
    function deductAmount($amt) {
      if ($this->balance <= 0) {
        return "No balance in the account.";
      }
      if ($this->balance < amt) {
        return "Requested amount is grater than account";
      }
      $this->balance = $this->balance - $amt;
    }
    function checkBalance() {
      echo "Acc: $this->accno; Name: $this->name; Balance: $this->balance <br>";
    }
  }

  $userAcc = new Bank();
  $userAcc->accno = 444;
  $userAcc->name = "Bob";
  $userAcc->balance = 1500;
  $userAcc->checkBalance();
  $userAcc->deductAmount(500);
  $userAcc->checkBalance();
  $userAcc->depositAmount(500);
  $userAcc->checkBalance();
?>
