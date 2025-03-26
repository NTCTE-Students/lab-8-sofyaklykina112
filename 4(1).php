<?php
interface Database {
    public function connect();
    public function query($sql);
}

class MySQLDatabase implements Database {
    public function connect() {
        print("Соединение с MySQL.<br>");
    }

    public function query($sql) {
        print("Выполнение запроса: {$sql}<br>");
    }
}

class PostgreSQLDatabase implements Database {
    public function connect() {
        print("Соединение с PostgreSQL.<br>");
    }

    public function query($sql) {
        print("Выполнение запроса: {$sql}<br>");
    }
}

class SQLiteDatabase implements Database {
    public function connect() {
        print("Соединение с SQLite.<br>");
    }

    public function query($sql) {
        print("Выполнение запроса: {$sql}<br>");
    }
}
function testDatabases() {
    $mysqlDb = new MySQLDatabase();
    $mysqlDb->connect();
    $mysqlDb->query("users");

    $postgresqlDb = new PostgreSQLDatabase();
    $postgresqlDb->connect();
    $postgresqlDb->query("users");

    $sqliteDb = new SQLiteDatabase();
    $sqliteDb->connect();
    $sqliteDb->query("users");

    print("Все тесты успешно завершены!<br>");
}

testDatabases();
?>

