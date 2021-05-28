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
      if (this.balance <= 0) {
        return "No balance in the account.";
      }
      
      if (this.balance < amt) {
        return "Requested amount is grater than account";
      }
      this.balance = this.balance - amt;
    }
    checkBalance() {
      return `Acc: ${this.accno}; Name: ${this.name}; Balance: ${this.balance} <br>`;
    }
  }

  const userAccES6 = new BankES6();
  userAccES6.accno = 666;
  userAccES6.name = "John";
  userAccES6.balance = 1500;
  userAccES6.deductAmount(500);
  userAccES6.depositAmount(500);
