<?php
interface Animal {
  function makeSound();
}

class Cat implements Animal {
  function makeSound() {
    echo "Meow" . PHP_EOL;
  }
}

class Dog implements Animal {
  function makeSound() {
    echo "Gaf" . PHP_EOL;
  }
}

$cat = new Cat();
$cat->makeSound();
$dog = new Dog();
$dog->makeSound();
