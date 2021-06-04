<?php 
  class Calculator {
    public $a;
    public $b;
    public $result;
    public $isCorrectFormat = false;
    
    function __construct($a = null, $b = null) {
      
      if (!is_numeric($a) || !is_numeric($b)) {
        echo "Enter correct numeric data";
        return;
      }
      
      $this->isCorrectFormat = true;
      
      $this->a = $a;
      $this->b = $b;
      
    }

    function add() {
      if (!$this->isCorrectFormat) {
        return;
      }
      $this->result = $this->a + $this->b;
    }

    function getResult() {
      if (!$this->isCorrectFormat) {
        return;
      }
      echo $this->result;
    }
    
    function __destruct() {
      echo "<br>Destructor";
    }
  }

  $calc = new Calculator(10, "adasda");
  $calc->add();
  $calc->getResult();

?>
