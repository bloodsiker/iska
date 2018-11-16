<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Federation
{
    /**
     * @param $id
     *
     * @return mixed
     */
    public static function getActivityById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM federation WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     * @param $text
     *
     * @return bool
     */
    public static function updateActivityById($id, $text)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE federation
            SET
                text = :text
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        return $result->execute();
    }
}