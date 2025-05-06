<?php
trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}

class User {
    use Logger;

    public function createUser($name) {
        // Логика создания пользователя
        $this->log("Пользователь {$name} создан.");
    }

    public function updateUser($name) {
        // Логика обновления пользователя
        $this->log("Пользователь {$name} обновлён.");
    }
}

class Order {
    use Logger;

    public function createOrder($orderId) {
        // Логика создания заказа
        $this->log("Заказ {$orderId} создан.");
    }

    public function updateOrder($orderId) {
        // Логика обновления заказа
        $this->log("Заказ {$orderId} обновлён.");
    }
}

class Product {
    use Logger;

    public function createProduct($productName) {
        // Логика создания продукта
        $this->log("Продукт {$productName} создан.");
    }

    public function updateProduct($productName) {
        // Логика обновления продукта
        $this->log("Продукт {$productName} обновлён.");
    }
}

$user = new User();
$user->createUser("Кира");
$user->updateUser("Кира");

$order = new Order();
$order->createOrder(123);
$order->updateOrder(123);

$product = new Product();
$product->createProduct("Товар A");
$product->updateProduct("Товар A");
