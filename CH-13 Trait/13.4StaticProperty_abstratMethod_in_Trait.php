<?php
    trait MyTrait{
        static $num;
        abstract function sayHi();
    }
    class MyClass{
        use MyTrait;
        function sayHi(){
            echo "Hi!\n";
        }
    }
    class MyClassTwo{
        use MyTrait;
        function sayHi(){
            echo "Hi!";
        }
    }
    MyClass::$num=22;
    $obj1=new MyClass();
    $obj1->sayHi();
    echo  MyClass::$num."\n";
    echo  $obj1::$num."\n";
?>