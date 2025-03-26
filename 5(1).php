<?php
class Order {
    public function calculateTotal() {
        return 0;
    }
}

class OnlineOrder extends Order {
    public function calculateTotal() {
        return 100; 
    }
}

class StoreOrder extends Order {
    public function calculateTotal() {
        return 80; 
    }
}

class TelephoneOrder extends Order {
    public function calculateTotal() {
        return 120; 
    }
}

function testOrders() {
    $onlineOrder = new OnlineOrder();
    $onlineTotal = $onlineOrder->calculateTotal();
    if ($onlineTotal != 100) {
        die("Ошибка в OnlineOrder!<br>");
    }

    $storeOrder = new StoreOrder();
    $storeTotal = $storeOrder->calculateTotal();
    if ($storeTotal != 80) {
        die("Ошибка в StoreOrder!<br>");
    }

    $telephoneOrder = new TelephoneOrder();
    $telephoneTotal = $telephoneOrder->calculateTotal();
    if ($telephoneTotal != 120) {
        die("Ошибка в TelephoneOrder!<br>");
    }

    print("Все тесты успешно завершены!<br>");
}

testOrders();