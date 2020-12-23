<?php
function sum($x,$y, ...$n){// ....$parameter_name that means unlimited arguments handled by array
    //here x=5 and y=6
    echo $x."\n";
    echo $y."\n";
    $result=0;
    for($i=0;$i<count($n);$i++){
        $result+=$n[$i];
    }
    return $x+$y+$result;
}

// echo sum(5,6);
echo sum(5,6,7,8,9);
