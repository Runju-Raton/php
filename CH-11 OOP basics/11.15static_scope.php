<?php
 class MyClass{
     private static $name="Runju Raton";
     static function showInfo(){
         echo "Hello, my name is: ".self::$name;
        //  $this->greetings(); $this cann't be used
     }
     public function greetings(){

     }
 }
 echo MyClass::showInfo();
?>