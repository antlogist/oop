<?php

include_once "Parent.php";
include_once "Child.php";

$parent = new ParentClass("Parent Class");
echo $parent->parentName . "<br>";
echo $parent->getParentName() . "<br>";

echo "<br>";
echo "<br>";

$child = new ChildClass("Child Class", $parent);
echo $child->childName . "<br>";
echo $child->getChildName() . "<br>";
echo $child->parentName . "<br>";
echo $child->getParentName() . "<br>";
echo $child->parentSurename . "<br>";
