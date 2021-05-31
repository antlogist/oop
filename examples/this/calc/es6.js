  class Calculator {
    constructor() {
      this.a;
      this.b;
      this.result;
    }
    getA() {
      console.log(this.a);
      return this.a;
    }
    setA(a) {
      this.a = a;
    }
    getB() {
      console.log(this.b);
      return this.b;
    }
    setB(b) {
      this.b = b;
    }
    add() {
      this.result = this.a + this.b;
    }
    getResult() {
      console.log(this.result);
      return this.result;
    }
  }

  const calc = new Calculator();
  calc.setA(10);
  calc.getA();
  calc.setB(15);
  calc.getB();
  calc.add();
  calc.getResult();
