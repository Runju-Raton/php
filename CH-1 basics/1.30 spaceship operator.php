<?php
    $x=15;
    $y=16;
    $result=$x<=>$y;
    if($result==1){
        echo "x is greater than y\n";
    }
    elseif($result==0){
        echo "x is equal to y\n";
    }
    else{
        //if return -1 
        echo "x is smaller than y\n";
    }
    echo "Result is: ".$result;
?>