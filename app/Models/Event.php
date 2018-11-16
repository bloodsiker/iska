<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Event
{

    /**  Получаем данніе о конкретном Событии
     * @param $id
     * @return mixed
     */
    public static function getEventById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM events WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $options
     *
     * @return bool
     */
    public static function createEvent($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO events '
            . '(title, path, img, status)'
            . 'VALUES '
            . '(:title, :path, :img, :status)';

        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':path', $options['path'], PDO::PARAM_STR);
        $result->bindParam(':img', $options['img'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * @return array
     */
    public static function getListEvent()
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM events WHERE status = 1 ORDER BY id DESC';

        $result = $db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getListEventByAdmin()
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM events ORDER BY id DESC';

        $result = $db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     * @param $options
     *
     * @return bool
     */
    public static function updateEventById($id, $options)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE events
            SET
                title = :title,
                status = :status
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * @param $id
     *
     * @return bool
     */
    public static function deleteEventById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM events WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}