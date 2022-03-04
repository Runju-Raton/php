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
        function A(){
            echo "Number Series 2A\n";
        }
        function B(){
            echo "Number Series 2B\n";
        }
    }
    class NumberClass{
        use NumberSeriesOne, NumberSeriesTwo{
            NumberSeriesOne::A as AA;
            NumberSeriesOne::B as BB;
            NumberSeriesTwo::A as AAA;
            NumberSeriesTwo::B as BBB;
        }
        function A(){
            echo "Number class A";
        }
        function B(){
            echo "Number class B";
        }
    }
    $numClassObj = new NumberClass();
    $numClassObj->AA();
    $numClassObj->BB();
?>