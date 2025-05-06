<?php
class Device {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
}

class Smartphone extends Device {
    public function call() {}
}

class Laptop extends Device {}

class Tablet extends Device {}


$smartphone = new Smartphone("Apple", "iPhone 16");
echo "Brand: " . $smartphone->brand . ", Model: " . $smartphone->model . "\n"; 
$smartphone->call(); 

$laptop = new Laptop("Xiaomi", "Redmi 13");
echo "Brand: " . $laptop->brand . ", Model: " . $laptop->model . "\n"; 

$tablet = new Tablet("Samsung", "Galaxy S5");
echo "Brand: " . $tablet->brand . ", Model: " . $tablet->model . "\n"; 


