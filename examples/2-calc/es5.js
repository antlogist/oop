function Calculator() {
  this.a;
  this.b;
  this.result;
  this.getA = function () {
    console.log(this.a);
    return this.a;
  }
  this.setA = function (a) {
    this.a = a;
  }
  this.getB = function () {
    console.log(this.b);
    return this.b;
  }
  this.setB = function (b) {
    this.b = b;
  }
  this.add = function () {
    this.result = this.a + this.b;
  }
  this.getResult = function () {
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
