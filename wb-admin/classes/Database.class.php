<?php

class Database {

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pswd = DB_PASSWORD;
    private $dbName = DB_NAME;

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pswd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}
