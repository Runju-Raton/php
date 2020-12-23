<?php
    $x=15;
    $y=15;
    $result=$x<=>$y;
    if($result==1){
        echo "x is greater than y";
    }
    elseif($result==0){
        echo "x is equal to y";
    }
    else{
        echo "x is smaller than y";
    }
?>