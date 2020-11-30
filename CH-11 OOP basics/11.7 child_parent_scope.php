<?php
class ParentClass{
    public function __construct(){
        $this->sayHi();
    }
    public function sayHi(){
        echo "Hello from Parent Class\n";
    }
}

class ChildClass extends ParentClass{
    public function sayHi(){
        parent::sayHi();
        echo "Hello from Child Class\n";
    }
}

/* $cc=new ChildClass();
$cc->sayHi();
$pc=new ParentClass();
$pc->sayHi(); */

$cc=new ChildClass();