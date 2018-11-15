<?php

namespace App\components\Db;

/**
 * Interface DataBase
 */
interface DataBase
{
    /**
     * @return mixed
     */
    public static function getConnection();
}