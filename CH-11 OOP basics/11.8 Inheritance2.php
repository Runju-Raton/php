<?php
class Shape{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
}
class Rectangle extends Shape{
    public $a;
    public $b;
    public function __construct($a,$b,$name){
        $this->a=$a;
        $this->b=$b;
        parent::__construct($name);
    }
    public function getArea(){
        echo $this->a*$this->b;
    }
}
$t=new Rectangle(2,4,"rectangle");
$t->getArea();
echo $t->name;