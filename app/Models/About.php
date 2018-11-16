<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class About
{
    /**
     * @param $id
     * @param $text
     *
     * @return bool
     */
    public static function updateHistory($id, $text)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE about
            SET
                text = :text
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public static function getHistory($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM about WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     * @param $text
     * @param $title
     *
     * @return bool
     */
    public static function updateCongratulation($id, $text, $title)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE about
            SET
                title = :title,
                text = :text
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        return $result->execute();
    }



}