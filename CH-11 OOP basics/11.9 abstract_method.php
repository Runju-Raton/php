<?php
/* abstract class ParentClass{
    abstract protected function writeSomething();
}
class ChildClass extends ParentClass{
    function writeSomething(){
        echo "I love coding";
    }
}

$cc=new ChildClass();
$cc->writeSomething(); */

abstract class ParentClass{
   abstract public function showYourInfo($name,$age=0);
   public function testFunction(){

   } 
}
class ChildClass extends ParentClass{
    public function showYourInfo($name,$age=24){
        echo "My name is {$name} and my age is {$age}";
    } 
}
$cc=new ChildClass();
// $cc->showYourInfo("Runju Raton", 24);
$cc->showYourInfo("Runju Raton",24);