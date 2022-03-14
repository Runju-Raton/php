<?php
 class MyClass{
     /* private $name;
     private $age; */
    /*  public function __construct($name='',$age=0){
        $this->name = $name;
        $this->age  = $age;
     } */
     public function __get($prop){
         echo "get";
         return $this->$prop;
     }
     public function __set($prop, $value){
        echo "set";
         $this->$prop=$value;
     }
 }

 $obj = new MyClass();
//  $obj->setName("Runju Raton");
//  $obj->getName();
 $obj->name="Runju Raton";
 echo $obj->name;
?>