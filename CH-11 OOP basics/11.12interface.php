<?php
// 100% abstract method but don't need to put abstract keyword before method
 interface BaseAnimal{
    function eat();
 }
//  interface extends interface
 interface BaseHuman extends BaseAnimal{

 }
 class Cat{

 }
//  class implements interface
 class Animal implements BaseHuman{
     public function eat(){
        echo "eating\n";
     }
 }
 class Human extends Animal{

 }
 $obj = new Human();

 echo $obj instanceof Human;
 echo "\n";
 $obj->eat();
?> 