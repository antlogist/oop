<?php

class Constructor {
  public $a;
  function __construct($a) {
    $this->a = $a / 100;
    echo $this->a;
  }
}
$constructor = new Constructor(1);


?>
