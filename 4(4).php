<?php
class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function eat() {
        echo "$this->name ест.\n";
    }
    
    public function sleep() {
        echo "$this->name спит.\n";
    }
}

class Bird extends Animal {
    public function fly() {
        echo "$this->name летит.\n";
    }
}

class Fish extends Animal {
    public function swim() {
        echo "$this->name плавает.\n";
    }
}

class Mammal extends Animal {}

$bird = new Bird('Сова');
$fish = new Fish('Карась');
$mammal = new Mammal('Собака');


echo "Животные едят и спят: ";
$bird->eat();
$fish->eat();
$mammal->eat();

$bird->sleep();
$fish->sleep();
$mammal->sleep();


echo "Уникальное поведение: ";
$bird->fly();
$fish->swim();


