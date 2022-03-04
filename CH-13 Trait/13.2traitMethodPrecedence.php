<?php
    trait NumberSeries{
        function A(){
            echo "Trait A method";
        }
    }
    class Number{
        function A(){
                echo "Class A method";
        }
    }
    $objNum = new Number();
    $objNum->A();
?>