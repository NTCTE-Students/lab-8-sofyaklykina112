<?php
interface Notifier {
    public function send($message);
}

class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}

class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}

class PushNotifier implements Notifier {
    public function send($message) {
        print("Отправка push-уведомления: {$message}<br>");
    }
}

$email = new EmailNotifier();
$sms = new SMSNotifier();
$push = new PushNotifier();

$email->send("Привет");
$sms->send("Привет");
$push->send("Привет");
