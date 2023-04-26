<?php

namespace Creational\Singleton\DbConnection;


class DatabaseConnection
{
    private static $instance;
    private string $connection;

    private function __construct()
    {
//        $this->connection = new PDO('mysql:host=localhost;dbname=test', 'keroles', '12345');
        $this->connection = 'new connection';
    }

    public static function getInstance(): DatabaseConnection
    {
        if (!self::$instance) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    public function getConnection(): string
    {
        return $this->connection;
    }


    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being serialized (which would create a second instance of it)
     */
    public function __wakeup()
    {

    }

}