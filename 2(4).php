<?php
class User {
    private $username;
    private $password;

    public function __construct($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function checkPassword($password) {
        return password_verify($password, $this->password);
    }
}

$user = new User('test_user');

$user->setPassword('my_password');

if ($user->checkPassword('my_password')) {
    echo "Пароль верный.\n";
} else {
    echo "Неверный пароль.\n";
}

if ($user->checkPassword('wrong_password')) {
    echo "Пароль верным.\n";
} else {
    echo "Пароль неверный.\n";
}
