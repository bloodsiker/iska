<?php

namespace App\components\Db;

use PDO;

/**
 * Class MySQL
 */
class MySQL implements DataBase
{
    private static $instance = null;

    private function __construct() {}
    private function __clone() {}
    private function __wakeup(){}

    /**
     * @return null|PDO
     */
    public static function getConnection()
    {
        if (self::$instance === null)
        {
            try {
                $opt  = array(
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => TRUE,
                );
                $dsn = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_DATABASE']};charset={$_ENV['DB_CHAR']}";
                self::$instance = new PDO($dsn, $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $opt);

            } catch (\PDOException $e) {
                echo "Failed to get DB handle: " . $e->getMessage() . "\n";
                exit;
            }
        }
        return self::$instance;
    }


//    public static function __callStatic($method, $args)
//    {
//        return call_user_func_array(array(self::getConnection(), $method), $args);
//    }
//
//    public static function run($sql, $args = [])
//    {
//        $stmt = self::getInstance()->prepare($sql);
//        $stmt->execute($args);
//        return $stmt;
//    }

}
