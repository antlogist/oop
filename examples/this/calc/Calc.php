<!--
Assignments: Write a Calculator Class using $this Keyword

1) Create a Calculator Class
2) Define $a, $b and $result as Properties
3) Write Getter and Setter Methods.
4) Write Add Method to add the values and store it in the results properties.
5) Use the getResults() Method to print the results.
-->


<?php 
class Calculator {
  public $a;
  public $b;
  public $result;
  
  function getA() {
    return $this->a;
  }
  
  function setA($a) {
    $this->a = $a;
  }
  
  function getB() {
    return $this->b;
  }
  
  function setB($b) {
    $this->b = $b;
  }
  
  function add() {
    $this->result = $this->a + $this->b;
  }
  
  function getResult() {
    echo $this->result;
    return $this->result;
  }
}

$calc = new Calculator();
$calc->setA(10);
$calc->setB(15);
$calc->add();
$calc->getResult();

?>