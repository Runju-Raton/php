<?php
    $string="Hello World, hello Bangladesh, hello USA";
    // $offset=strpos($string,"hello"); //13
    // $offset=strrpos($string,"hello");//31
    //$offset=stripos($string,"hello");//0
  // $offset=strripos($string,"hello");//31
   $offset=strpos($string,"hellow");
    echo $offset."\n";
    if($offset!==false){
        echo "substring hello is found";
    }
   /*  if(0==false){
        echo "zero is equal to false";
    } */
    /* $n;
    var_dump($n);
    if($n!==false){
        echo "true";
    } */
?>