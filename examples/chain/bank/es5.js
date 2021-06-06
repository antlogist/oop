  function BankES5(accno = null, name = null) {
    this.accno = accno;
    this.name = name;
    this.balance = 0;

    this.depositAmount = function(amt) {
      this.balance = this.balance + amt;
      return this;
    }

    this.deductAmount = function(amt) {
      if (this.balance <= 0) {
        console.log("No Balance in the Account.");
        return this;
      }
      if (this.balance < amt) {
        console.log("Requested Amount is greater than Balance.");
        return this;
      }

      this.balance = this.balance - amt;
      return this;
    }

    this.checkBalance = function() {
      console.log(`Your balance is ${this.balance}`);
      return this;
    }
  }

  bankES5 = new BankES5(101, "John, Smith");
  bankES5.checkBalance();
  bankES5.depositAmount(500).checkBalance();
  bankES5.deductAmount(100).checkBalance();
  bankES5.deductAmount(1000).checkBalance();
  console.log(bankES5.checkBalance().name);
