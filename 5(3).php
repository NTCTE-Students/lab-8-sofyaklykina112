<?php
class SessionManager {
    private $sessionName = 'app_session';
    private $sessionStarted = false;

    public function __construct() {
        if (!headers_sent()) {
            session_name($this->sessionName);
            session_start();
            $this->sessionStarted = true;
        }
    }

    public function __destruct() {
        if ($this->sessionStarted) {
            session_write_close();
        }
    }

    public function set($key, $value) {
        if ($this->sessionStarted) {
            $_SESSION[$key] = $value;
        }
    }

    public function get($key, $default = null) {
        return $this->sessionStarted ? $_SESSION[$key] ?? $default : $default;
    }

    public function has($key) {
        return $this->sessionStarted && isset($_SESSION[$key]);
    }

    public function remove($key) {
        if ($this->sessionStarted && $this->has($key)) {
            unset($_SESSION[$key]);
        }
    }

    public function clear() {
        if ($this->sessionStarted) {
            $_SESSION = [];
        }
    }

    public function regenerateId() {
        if ($this->sessionStarted) {
            session_regenerate_id(true);
        }
    }
}

$session = new SessionManager();

$session->set("username", "Мария:");
$session->set("email", "Maria@example.com");

echo $session->get("username"); 
echo $session->get("email"); 

