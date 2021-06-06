  class BankES6 {
    constructor(accno = null, name = null) {
      this.accno = accno;
      this.name = name;
      this.balance = 0;
    }

    depositAmount(amt) {
      this.balance = this.balance + amt;
      return this;
    }
    deductAmount(amt) {
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
    checkBalance() {
      console.log(`Your balance is ${this.balance}`);
      return this;
    }
  }

  bankES6 = new BankES6(101, "John, Smith");
  bankES6.checkBalance();
  bankES6.depositAmount(500).checkBalance();
  bankES6.deductAmount(100).checkBalance();
  bankES6.deductAmount(1000).checkBalance();
  console.log(bankES6.checkBalance().name);
