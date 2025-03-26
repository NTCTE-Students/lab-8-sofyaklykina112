<?php
class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
}

class Manager extends Employee {
    public function manageTeam() {
        return "{$this->name} is managing the team.";
    }
}

class Developer extends Employee {
    public function writeCode() {
        return "{$this->name} is coding.";
    }
}

class Designer extends Employee {
    public function design() {
        return "{$this->name} is designing.";
    }
}

$developer = new Developer("Kira", 23000);
echo $developer->writeCode(); 
echo "\n";

$designer = new Designer("Lisa", 56000);
echo $designer->design(); 
echo "\n";
