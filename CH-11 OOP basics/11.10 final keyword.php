<?php
class ParentClass{
    final function do(){
        echo "Do something";
    }
}
class ChildClass extends ParentClass{
    // we can't override the final method
   /*  function do(){
        echo "Do nothing";
    } */
}
$cc=new ChildClass();
$cc->do();