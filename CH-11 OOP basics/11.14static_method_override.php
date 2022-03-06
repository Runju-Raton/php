<?php
    class ParentClass{
        static function greetings(){
            echo "Hello form Parent\n";
        }
    }
    class ChildClass extends ParentClass{
        static function greetings(){
            parent::greetings();
            echo "Hello form Child\n";
        }
    }
    $obj= new ChildClass();
    $obj->greetings();

?>