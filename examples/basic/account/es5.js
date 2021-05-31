  function BankES5(accno, name, balance) {
    this.accno = accno;
    this.name = name;
    this.balance = balance;

    this.depositAmount = function (amt) {
      this.balance = this.balance + amt;
    };
    this.deductAmount = function (amt) {
      if (this.balance <= 0) {
        return "No balance in the account.";
      }
      
      if (this.balance < amt) {
        return "Requested amount is grater than account";
      }
      this.balance = this.balance - amt;
    };
    this.checkBalance = function () {
      return `Acc: ${this.accno}; Name: ${this.name}; Balance: ${this.balance} <br>`
    };
  }

  const userAccES5 = new BankES5();
  userAccES5.accno = 555;
  userAccES5.name = "John";
  userAccES5.balance = 1500;
  userAccES5.deductAmount(500);
  userAccES5.depositAmount(500);
