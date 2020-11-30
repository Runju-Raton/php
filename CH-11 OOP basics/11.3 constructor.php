 <?php
/* class Person{
    public $name;
    function __construct($name){
        $this->name=$name;
    }
    public function sayHi(){
        echo "\nHi! My name is {$this->name}\n";
        $this->sayName();
    }
    public function sayName(){
        echo $this->name;

} */
/* $p1=new Person("Anik");
$p1->sayHi();
$p2=new Person("Pinky");
$p2->sayHi();
$p3=new Person("Shazu");
$p3->sayHi();
$p4=new Person("Tonmoy");
$p4->sayHi();
?> --> */

class Person{
    public $name;
    public $age;
    public function __construct($name, $age=0){
        $this->name=$name;
        $this->age=$age;
    }
    public function sayYourInfo(){
        echo "\nHi! I'm {$this->name}. ";
        $this->sayAge();
    }
    public function sayAge(){
        if(0==$this->age){
            echo "I don't know How old I am!";
        }
        else{
            echo "My age is {$this->age}.";
        }
      
    }
}

$p1=new Person("Runju",24);
$p1->sayYourInfo();
$p2=new Person("Anik",26);
$p3=new Person("Pinky");
$p3->sayYourInfo();

