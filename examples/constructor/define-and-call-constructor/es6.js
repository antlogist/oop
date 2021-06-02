//es6
class ConstructorES6 {
  constructor(a) {
    this.a = a / 100;
    this.print = console.log(this.a);
  }
}
const constructorES6 = new ConstructorES6(4);