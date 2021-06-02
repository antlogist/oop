//Arrow func
const ConstructorArrow = (a, b) => {
  this.a = a / 100;
  this.print = console.log(this.a);
}
const constructorArrow = ConstructorArrow(5);
