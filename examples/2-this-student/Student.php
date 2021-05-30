<?php

class Student {
  public $name;
  public $class;
  
  function getName() : string {
    echo $this->name . PHP_EOL;
    return $this->name;
  }
  
  function setName($newName) {
    $this->name = $newName;
  }
  
  function getClass() : string {
    echo $this->class . PHP_EOL;
    return $this->class;
  }
  
  function setClass($newClass) {
    $this->class = $newClass;
  }
  
  function printDetails() : string {
    echo "Name: $this->name, $this->class." . PHP_EOL;
    return "Name: $this->name, $this->class.";
  }
}

$student = new Student();
$student->setName("Bob");
$student->class = 5;
$student->getName();
$student->getClass();
$student->printDetails();

?>

<script>
  //es5
  function StudentES5() {
    this.name = "";
    this.class = "";
    
    this.getName = function() {
      console.log(this.name)
    }
    this.setName = function(newName) {
      this.name = newName;
    }
    this.getClass = function() {
      console.log(this.class)
    }
    this.setClass = function(newClass) {
      this.class = newClass;
    }
    this.printDetails = function() {
      console.log(`Name: ${this.name}, Class: ${this.class}`);
    }
  }

  const studentES5 = new StudentES5();
  studentES5.setName("Bob");
  studentES5.class = 5;
  studentES5.getName();
  studentES5.getClass();
  studentES5.printDetails();

  //es6
  class StudentES6 {
    constructor() {
      this.name = "";
      this.class = "";
    }

    getName() {
      console.log(this.name)
    }
    setName(newName) {
      this.name = newName;
    }
    getClass() {
      console.log(this.class)
    }
    setClass(newClass) {
      this.class = newClass;
    }
    printDetails() {
      console.log(`Name: ${this.name}, Class: ${this.class}`);
    }
  }

  const studentES6 = new StudentES6();
  studentES6.setName("Bob");
  studentES6.class = 5;
  studentES6.getName();
  studentES6.getClass();
  studentES6.printDetails();

</script>
