<?php
trait Validatable {
    public function validate($data) {
        // Общая логика валидации
        return !empty($data);
    }
}

class RegistrationForm {
    use Validatable;

    public function submit($data) {
        if ($this->validate($data)) {
            print("Регистрация успешна.<br>");
        } else {
            print("Ошибка валидации.<br>");
        }
    }
}

class LoginForm {
    use Validatable;

    public function submit($data) {
        if ($this->validate($data)) {
            print("Логин успешен.<br>");
        } else {
            print("Ошибка валидации.<br>");
        }
    }
}


function testForms() {
    $registrationForm = new RegistrationForm();
    $validData = ['email' => 'example@example.com', 'password' => '123456'];
    $registrationForm->submit($validData);
    if ($registrationForm->submit($validData) != "Регистрация успешна.<br>") {
        die("Ошибка в RegistrationForm с валидными данными!<br>");
    }

    $invalidData = [];
    $registrationForm->submit($invalidData);
    if ($registrationForm->submit($invalidData) != "Ошибка валидации.<br>") {
        die("Ошибка в RegistrationForm с невалидными данными!<br>");
    }

    $loginForm = new LoginForm();
    $validData = ['email' => 'example@example.com', 'password' => '123456'];
    $loginForm->submit($validData);
    if ($loginForm->submit($validData) != "Логин успешен.<br>") {
        die("Ошибка в LoginForm с валидными данными!<br>");
    }

    $invalidData = [];
    $loginForm->submit($invalidData);
    if ($loginForm->submit($invalidData) != "Ошибка валидации.<br>") {
        die("Ошибка в LoginForm с невалидными данными!<br>");
    }

    print("Все тесты успешно завершены!<br>");
}
testForms();
?>
