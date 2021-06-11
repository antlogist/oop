<?php

class ParentClass {
  public $parentName;
  public $parentSurename;
  function __construct($parentName, $parentSurename = "Parent Surename") {
    $this->parentName = $parentName;
    $this->parentSurename = $parentSurename;
  }
  function getParentName() {
    return "Get parent name: $this->parentName";
  }
}
