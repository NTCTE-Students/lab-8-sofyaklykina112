<?php
trait Authenticatable {
    public function login($username) {
        print("Пользователь {$username} вошёл в систему.<br>");
    }

    public function logout($username) {
        print("Пользователь {$username} вышел из системы.<br>");
    }
}

trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}

class User {
    use Logger;
    use Authenticatable;

    public function createUser($name) {
        $this->log("Пользователь {$name} создан.");
    }
}

function testAuthentication() {
    $user = new User();

    $user->login('admin');
    if ($user->login('admin') != "Пользователь admin вошёл в систему.<br>") {
        die("Ошибка в тесте входа пользователя!<br>");
    }

    $user->logout('admin');
    if ($user->logout('admin') != "Пользователь admin вышел из системы.<br>") {
        die("Ошибка в тесте выхода пользователя!<br>");
    }

    $user->createUser('test_user');
    if ($user->createUser('test_user') != "Лог: Пользователь test_user создан.<br>") {
        die("Ошибка в тесте создания пользователя!<br>");
    }

    print("Все тесты успешно завершены!<br>");
}

testAuthentication();
?>


