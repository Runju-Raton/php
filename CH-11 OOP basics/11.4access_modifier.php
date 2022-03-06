<?php
    class ParentClass{
        public $publicName;
        private $privateName;
        protected $protectedName;
      /*   function printProtectedName(){
            return $this->protectedName="Runju Raton proteted\n";
        }
        function printPrivateName(){
            return $this->privateName="Runju Raton private\n";
        } */
    }

    class ChildClass extends ParentClass{
        function printProtectedName(){
            return $this->protectedName="Runju Raton proteted\n";
        }
         /* function printPrivateName(){
            return $this->privateName="Runju Raton private\n";
        }  */
    }
    $obj1= new ChildClass();
    $obj1->publicName="Runju Raton public\n";
    echo $obj1->publicName;
    $obj1->privateName="Runju Raton";
    echo $obj1->privateName;
 /*    $obj1->protectedName="fdf";
    echo $obj1->protectedName; */
    echo $obj1->printProtectedName();
    // echo $obj1->printPrivateName();
?>

<!-- 
    private can access only own class 
    protected own + child class
    public can access anywhere
 -->