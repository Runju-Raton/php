<?php
    $greetings="Hello World!";
    echo(strrev($greetings));
    echo"\n";

    $len=strlen($greetings);
    for($i=1;$i<=$len;$i++){
        echo $greetings[$i*(-1)];
    }
    echo"\n";
    for($i=$len-1;$i>=0;$i--){
        echo $greetings[$i];
    }
?>