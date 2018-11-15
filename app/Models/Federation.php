<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Federation
{

    /**
     * Возвращает публикацию с указанным id
     * @param integer $id <p>id bannera</p>
     * @return array <p>Массив с информацией о bannere</p>
     */
    public static function getActivityById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM federation WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }

    /**
     * @param $id
     * @param $text
     * @return bool
     */
    public static function updateActivityById($id, $text)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE federation
            SET
                text = :text
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':text', $text, PDO::PARAM_STR);

        return $result->execute();
    }


    public static function createPosition($options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO federation_position '
            . '(title, path, file)'
            . 'VALUES '
            . '(:title, :path, :file)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':path', $options['path'], PDO::PARAM_STR);
        $result->bindParam(':file', $options['file'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }


    public static function getPositionById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM federation_position WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }



    public static function getListPosition()
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Получение и возврат результатов
        $result = $db->query("SELECT * FROM federation_position ORDER BY id DESC");
        $positionList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $positionList[$i]['id'] = $row['id'];
            $positionList[$i]['title'] = $row['title'];
            $positionList[$i]['path'] = $row['path'];
            $positionList[$i]['file'] = $row['file'];
            $i++;
        }
        return $positionList;
    }


    public static function deletePositionById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM federation_position WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function updatePositionById($id, $title)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE federation_position
            SET
                title = :title
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $title, PDO::PARAM_STR);

        return $result->execute();
    }

}