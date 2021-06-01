//es5
function SumES5(a, b) {
  this.print = console.log(a + b);

  (function () {
    console.log(a + b);
  })();
}
const userES5 = new SumES5(5, 10);
