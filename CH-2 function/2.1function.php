<?php
include_once "2.1.1positiveCheck.php";
    function isEven($n){
        if($n%2==0){
            return true; 
        }
        return false;
    }
    $n=13;
    if(isEven($n)){
        echo $n." is a even number";
    }
    else{
        echo $n." is a odd number";
    }
    echo "\n";
    $num=-2;
    if(isPositive($num)){
        echo $num." is a positive number.";
    }
    else{
        echo $num." is a negative number";
    }
?>