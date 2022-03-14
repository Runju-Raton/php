<?php
const PI = 3.1416;
echo PI."\n";

define('OK',"I'm okay!");
echo OK;

class MyClass{
    private const ROLE = "Admin";
    public function printRole(){
        echo "Role: ".self::ROLE;
    }
}

$obj = new MyClass();
$obj->printRole();