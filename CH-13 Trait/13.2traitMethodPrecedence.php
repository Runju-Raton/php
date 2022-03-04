<?php
    trait NumberSeries{
        function A(){
            echo "Trait A method";
        }
    }
    class ParentNumber{
        function A(){
                echo "Parent Class A method";
        }
    }
    class Number extends ParentNumber{
        function A(){
                echo "Class A method";
        }
    }
    $objNum = new Number();
    $objNum->A();
?>