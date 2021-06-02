//es5
function ConstructorES5(a) {
  this.a = a / 100;
  console.log(this.a);
}
const constructorES5 = new ConstructorES5(1);

//es5 se
function ConstructorES5se(a) {
  this.a = a;
  //self-exec function
  (function () {
    this.a = this.a / 100;
  }.bind(this))();
  console.log(this.a);
}
const constructorES5se = new ConstructorES5se(2);
