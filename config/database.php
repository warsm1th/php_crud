<?php

class Database
{
    // данные для подключения к БД
    private $host = "localhost";
    private $db_name = "dbase1";
    private $username = "bebeg";
    private $password = "Memefrog_6277";
    public $conn;

    // получение соединения с базой данных
    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Ошибка соединения: " . $exception->getMessage();
        }

        return $this->conn;
    }
}