<?php
    class MyStaticClass{
        static $a=10;
        static $b=20;
        static $number;
        static function sum(){
            return "Sum: ".(self::$a+self::$b)."\n";
        }
        function division(){
            return "Division\n";
        } 
    }

    echo MyStaticClass::sum();
    // echo MyStaticClass::division();
    echo MyStaticClass::$number=100;

?>