<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Bank Class</title>
</head>

<body>
  <?php
  // PHP
  class Bank {
    public $accno;
    public $name;
    public $balance;

    function depositAmount($amt) {
      $this->balance = $this->balance + $amt;
    }
    function deductAmount($amt) {
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
  echo "PHP <br>";
  $userAcc->checkBalance();
  $userAcc->deductAmount(500);
  $userAcc->checkBalance();
  $userAcc->depositAmount(500);
  $userAcc->checkBalance();

?>

  <div id="resultES5" style="margin-top: 1rem;"></div>
  <div id="resultES6" style="margin-top: 1rem;"></div>

</body>

<script>
  /* JavaScript ES5 */
  const renderES5 = document.getElementById("resultES5");

  function BankES5(accno, name, balance) {
    this.accno = accno;
    this.name = name;
    this.balance = balance;

    this.depositAmount = function(amt) {
      this.balance = this.balance + amt;
    };
    this.deductAmount = function(amt) {
      this.balance = this.balance - amt;
    };
    this.checkBalance = function() {
      return `Acc: ${this.accno}; Name: ${this.name}; Balance: ${this.balance} <br>`
    };
  }

  renderES5.insertAdjacentHTML('beforeEnd', `JavaScript ES5<br>`);

  const userAccES5 = new BankES5();
  userAccES5.accno = 555;
  userAccES5.name = "John";
  userAccES5.balance = 1500;

  renderES5.insertAdjacentHTML('beforeEnd', userAccES5.checkBalance());

  userAccES5.deductAmount(500);
  renderES5.insertAdjacentHTML('beforeEnd', userAccES5.checkBalance());

  userAccES5.depositAmount(500);
  renderES5.insertAdjacentHTML('beforeEnd', userAccES5.checkBalance());

  /* JavaScript ES6 */
  const renderES6 = document.getElementById("resultES6");

  class BankES6 {
    constructor(accno, name, balance) {
      this.accno = accno;
      this.name = name;
      this.balance = balance;
    }

    depositAmount(amt) {
      this.balance = this.balance + amt;
    }
    deductAmount(amt) {
      this.balance = this.balance - amt;
    }
    checkBalance() {
      return `Acc: ${this.accno}; Name: ${this.name}; Balance: ${this.balance} <br>`;
    }

  }

  renderES6.insertAdjacentHTML('beforeEnd', `JavaScript ES6<br>`);

  const userAccES6 = new BankES6();
  userAccES6.accno = 666;
  userAccES6.name = "John";
  userAccES6.balance = 1500;

  renderES6.insertAdjacentHTML('beforeEnd', userAccES6.checkBalance());

  userAccES6.deductAmount(500);
  renderES6.insertAdjacentHTML('beforeEnd', userAccES6.checkBalance());

  userAccES6.depositAmount(500);
  renderES6.insertAdjacentHTML('beforeEnd', userAccES6.checkBalance());

</script>

</html>
