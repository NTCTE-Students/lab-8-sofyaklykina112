<?php

interface Actions {
    public function run();
    public function sleep();
}

abstract class Animal {
    private $name;
    private $age;
    private static $idCounter = 1; // Счетчик ID 
    private $id;

    public function __construct() {
        $this->id = self::$idCounter++; // Присваивание ID
    }

    public function getId() {
        return $this->id; // Получение ID
    }

    public function describe() {
        print("Это {$this->getName()}, ему {$this->getAge()} лет.<br>");
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        if($age >= 0) {
            $this->age = $age;
        } else {
            print('Возраст не может быть отрицательным.<br>');
        }
    }

    abstract public function makeSound();
}

class Dog extends Animal implements Actions {
    public function makeSound() {
        print("ID собаки: {$this->getId()}<br>{$this->getName()} говорит: Гав-гав!<br>");
    }

    public function run() {
        print("{$this->getName()} бежит.<br>");
    }

    public function sleep() {
        print("{$this->getName()} спит.<br>");
    }
}

class Cat extends Animal implements Actions {
    public function makeSound() {
        print("ID кошки: {$this->getId()}<br>{$this->getName()} говорит: Мяу-мяу!<br>");
    }

    public function run() {
        print("{$this->getName()} крадётся.<br>");
    }

    public function sleep() {
        print("{$this->getName()} спит.<br>");
    }
}

$dog = new Dog();
$dog->setName('Бобик');
$dog->makeSound();

$cat = new Cat();
$cat->setName('Мурка');
$cat->makeSound();