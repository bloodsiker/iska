<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Achievement
{

    /**
     * Возвращает публикацию с указанным id
     * @param integer $id <p>id bannera</p>
     * @return array <p>Массив с информацией о bannere</p>
     */
    public static function getAchievementById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM achievement WHERE id = :id';

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

    public static function getAchievementByAlias($alias)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM achievement WHERE alias = :alias';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':alias', $alias, PDO::PARAM_STR);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }


    /**
     * Возвращает список категорий в админ-панель
     * @return array <p>Массив с товарами</p>
     */
    public static function getCategoryList($category = 'international')
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Получение и возврат результатов
        $result = $db->query("SELECT * FROM achievement WHERE category = '$category' ORDER BY id ASC");
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['alias'] = $row['alias'];
            $categoryList[$i]['title'] = $row['title'];
            $i++;
        }
        return $categoryList;
    }


    /**
     * @param $options
     * @return bool
     */
    public static function createCategory($category, $name, $alias)
    {
        // Соединение с БД
        $db = MySQL::getConnection();


        // Текст запроса к БД
        $sql = 'INSERT INTO achievement '
            . '(category, title, alias)'
            . 'VALUES '
            . '(:category, :title, :alias)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_STR);
        $result->bindParam(':title', $name, PDO::PARAM_STR);
        $result->bindParam(':alias', $alias, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * @param $id
     * @param $text
     * @return bool
     */
    public static function updateAchievementById($id, $title, $text)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE achievement
            SET
                title = :title,
                text = :text
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':text', $text, PDO::PARAM_STR);

        return $result->execute();
    }


    /**
     * @param $id
     * @return bool
     */
    public static function deleteCategoryById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM achievement WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

}