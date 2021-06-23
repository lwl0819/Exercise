<?php
//DB 連線用模組
namespace config;

use PDO;
use PDOexception;

class DBconnect {

    private static $pdo = null;
    
    public static function pdo(){
        if (self::$pdo !== null){
            return self::$pdo;
        }

        try {
            $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', DB_HOST, DB_NAME);
            $option = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

            return self::$pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $option);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }


}