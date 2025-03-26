<?php
class Payment {
    public function process() {
    }
}

class CreditCardPayment extends Payment {
    public function process() {
        print("Обработка платежа по кредитной карте.<br>");
    }
}

class PayPalPayment extends Payment {
    public function process() {
        print("Обработка платежа через PayPal.<br>");
    }
}

class BankTransferPayment extends Payment {
    public function process() {
        print("Обработка bank transfer.<br>");
    }
}

function testPayments() {
    $ccPayment = new CreditCardPayment();
    $ccResult = $ccPayment->process();
    if ($ccResult != "Обработка платежа по кредитной карте.<br>") {
        die("Ошибка CreditCardPayment!<br>");
    }

    $ppPayment = new PayPalPayment();
    $ppResult = $ppPayment->process();
    if ($ppResult != "Обработка платежа через PayPal.<br>") {
        die("Ошибка PayPalPayment!<br>");
    }

    $btPayment = new BankTransferPayment();
    $btResult = $btPayment->process();
    if ($btResult != "Обработка bank transfer.<br>") {
        die("Ошибка  BankTransferPayment!<br>");
    }

    print("Все тесты успешно завершены!<br>");
}

testPayments();