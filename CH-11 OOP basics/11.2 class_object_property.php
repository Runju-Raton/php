<?php

class Human{
    public $name;
    function sayHi(){
         echo "Hi! My name is {$this->name}";
    }
    private function sayName(){
        echo $this->name;
    }
}
class Cat{
    function sayHi(){
        echo "Meow!";
    }
}
class Dog{
    function sayHi(){
        echo "woof!";
    }
}

$h=new Human();
$c=new Cat();
$d=new Dog();

$h->sayHi();
echo "\n";
$c->sayHi();
echo "\n";
$d->sayHi();
echo "\n";

// $h->name="Runju Raton";
// echo $h->name;

 $h->name="Runju Raton"; //class property value assign
//  echo $h->sayName();
echo $h->sayHi();

?>