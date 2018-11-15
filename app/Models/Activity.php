<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Activity
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
        $sql = 'SELECT * FROM activity WHERE id = :id';

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
        $sql = "UPDATE activity
            SET
                text = :text
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':text', $text, PDO::PARAM_STR);

        return $result->execute();
    }

}