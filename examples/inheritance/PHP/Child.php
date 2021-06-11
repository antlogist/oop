<?php

class ChildClass extends ParentClass {
  public $childName;
  function __construct($childName, ParentClass $parentClass) {
    $this->childName = $childName;
    $this->parentName = $parentClass->parentName;
    $this->parentSurename = $parentClass->parentSurename;
  }
  
  function getChildName() {
    return "Get child name: $this->childName";
  }
}