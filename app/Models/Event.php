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
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM events WHERE id = :id';

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
     * Добавляет новую категорию
     * @param array $options <p>Массив с информацией о событии</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createEvent($options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO events '
            . '(title, path, img, status)'
            . 'VALUES '
            . '(:title, :path, :img, :status)';


        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':path', $options['path'], PDO::PARAM_STR);
        $result->bindParam(':img', $options['img'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * Возвращает список категорий в админ-панель
     * @return array <p>Массив с товарами</p>
     */
    public static function getListEvent()
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Получение и возврат результатов
        $result = $db->query("SELECT * FROM events WHERE status = '1' ORDER BY id DESC");
        $eventList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $eventList[$i]['id'] = $row['id'];
            $eventList[$i]['title'] = $row['title'];
            $eventList[$i]['path'] = $row['path'];
            $eventList[$i]['img'] = $row['img'];
            $eventList[$i]['status'] = $row['status'];
            $i++;
        }
        return $eventList;
    }

    public static function getListEventByAdmin()
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Получение и возврат результатов
        $result = $db->query("SELECT * FROM events ORDER BY id DESC");
        $eventList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $eventList[$i]['id'] = $row['id'];
            $eventList[$i]['title'] = $row['title'];
            $eventList[$i]['path'] = $row['path'];
            $eventList[$i]['img'] = $row['img'];
            $eventList[$i]['status'] = $row['status'];
            $i++;
        }
        return $eventList;
    }

    public static function updateEventById($id, $options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE events
            SET
                title = :title,
                status = :status
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Удаляет документ с указанным id
     * @param integer $id <p>id документа</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteEventById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM events WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

}