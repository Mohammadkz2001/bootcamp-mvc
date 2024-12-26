<?php

namespace config;
use PDO;
use PDOException;

class Database
{
    private static $host = "127.0.0.1";
    private static $userName = "root";
    private static $password = "";
    private static $dbName = "mvc";

    public static function connect()
    {
        try {
            $server = self::$host;
            $database = self::$dbName;
            $username = self::$userName;
            $password = self::$password;
            return new PDO("mysql:host=$server;dbname=$database", $username, $password);
//            return $connect;
        } catch (PDOException $e) {
            die('database connection failed: ' . $e->getMessage());
        }
    }
}
