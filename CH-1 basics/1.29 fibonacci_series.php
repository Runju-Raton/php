<?php
    $first=0;
    $second=1;
    $third=1;
    for($i=0;$i<10;$i++){
        echo "\n".$first."->"."second={$second} third={$third}";
        $first+=$second;
        $second=$third;
        $third=$first;
    }
?>