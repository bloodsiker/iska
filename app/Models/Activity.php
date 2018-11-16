<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Activity
{
    /**
     * @param $id
     *
     * @return mixed
     */
    public static function getActivityById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM activity WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     * @param $text
     * @return bool
     */
    public static function updateActivityById($id, $text)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE activity
            SET
                text = :text
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        return $result->execute();
    }
}