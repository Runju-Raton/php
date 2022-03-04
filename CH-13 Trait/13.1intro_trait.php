<?php
    trait NumberSeriesOne{
        function A(){
            echo "Number Series 1A\n";
        }
        function B(){
            echo "Number Series 1B\n";
        }
    }
    trait NumberSeriesTwo{
        function C(){
            echo "Number Series 2A\n";
        }
        function D(){
            echo "Number Series 2B\n";
        }
    }
    class NumberClass{
        use NumberSeriesOne, NumberSeriesTwo;
    }
    $numClassObj = new NumberClass();
    $numClassObj->A();
    $numClassObj->B();
    $numClassObj->C();
    $numClassObj->D();

?>