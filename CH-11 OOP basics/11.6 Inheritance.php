<?php
/* class Animal{

    public function walk(){
        echo "I am walking\n";
    }
    public function eat(){
        echo "I am eating\n";
    }
    public function sleep(){
        echo "I am sleeping\n";
    }
}

class Human extends Animal{
    public function greetings(){
        echo "Hi!";
    }

}
class Cat extends Animal{
    public function greetings(){
        echo "Meow!";
    }
}
$rasel= new Human();
$rasel->greetings();
$rasel->walk();
$tom= new Cat();
$tom->greetings();
$tom->walk(); */


/* class Animal{
    // public $name;
    // private $name;
    protected $name;

    public function __construct($name){
        $this->name=$name;
    }

    public function walk(){
        echo "{$this->name} is walking\n";
    }
    public function eat(){
        echo "{$this->name} is eating\n";
    }
    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }
}

class Human extends Animal{
    public function greetings(){
        echo "{$this->name} says Hi! ";
    }

}
class Cat extends Animal{
    public function greetings(){
        echo "{$this->name} says Meow! ";
    }
}
$rasel= new Human("Rasel");
$rasel->greetings();
$rasel->walk();
$tom= new Cat("Tom");
$tom->greetings();
$tom->walk(); */
class Animal{
    // public $name;
    // private $name;
    protected $name;

    public function __construct($name){
        $this->name=$name;
    }

    public function walk(){
        echo "{$this->name} is walking\n";
    }
    public function eat(){
        echo "{$this->name} is eating\n";
    }
    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }
    protected function addTitle($title){
        $this->name="{$title} {$this->name}";
    }
}

class Human extends Animal{
    
    public function greetings(){
        $this->addTitle("Mr.");
        echo "{$this->name} says Hi! ";
    }

}
class Cat extends Animal{
    public function greetings(){
        echo "{$this->name} says Meow! ";
    }
}
$rasel= new Human("Rasel");
$rasel->sleep();
$rasel->greetings();
$rasel->walk();
$tom= new Cat("Tom");
$tom->greetings();
$tom->walk();