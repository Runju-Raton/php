<?php
    function isPositive($p){
        if($p>0){
            return true;
        }
        return false;
    }

    // function fact(int $n){
    function fact($n){
        if(gettype($n)!="integer"){
            return "invalid";
        }
        $result=1;
        for($i=1;$i<=$n;$i++){
             $result*=$i;
        }
        return $result;
    }

?>