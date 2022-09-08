<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Leadership
{
    /**
     * @return array
     */
    public static function getAll()
    {
        $db = MySQL::getConnection();

        $sql = "SELECT * FROM leaderships ORDER BY id DESC";

        $result = $db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAllForSite()
    {
        $db = MySQL::getConnection();

        $sql = "SELECT * FROM leaderships 
                WHERE status = '1' 
                ORDER BY id";

        $result = $db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM leaderships WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $options
     *
     * @return int|string
     */
    public static function create($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO leaderships '
            . '(name, position, photo, status)'
            . 'VALUES '
            . '(:name, :position, :photo, :status)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':position', $options['position'], PDO::PARAM_STR);
        $result->bindParam(':photo', $options['photo'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }

    public static function updateById($id, $options)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE leaderships
            SET
                name = :name,
                position = :position,
                photo = :photo,
                status = :status
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':position', $options['position'], PDO::PARAM_STR);
        $result->bindParam(':photo', $options['photo'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }

    public static function deleteById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM leaderships WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * @param $status
     *
     * @return string
     */
    public static function getStatus($status)
    {
        switch ($status) {
            case '1':
                return 'Отображается';
                break;
            case '0':
                return 'Скрыта';
                break;
        }
    }

    /**
     * @param $status
     *
     * @return string
     */
    public static function getColor($status)
    {
        switch ($status) {
            case '1':
                return 'status-0';
                break;
            case '0':
                return 'status-4';
                break;
        }
    }
}