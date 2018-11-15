<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Category
{

    /**
     * Возвращает список категорий в админ-панель
     * @return array <p>Массив с товарами</p>
     */
    public static function getCategoryListAdmin($parent_id = '0')
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Получение и возврат результатов
        $result = $db->query("SELECT * FROM category WHERE parent_id = $parent_id ORDER BY sort ASC");
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['parent_id'] = $row['parent_id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['description'] = $row['description'];
            $categoryList[$i]['sort'] = $row['sort'];
            $categoryList[$i]['status'] = $row['status'];
            $categoryList[$i]['last'] = $row['last'];
            $i++;
        }
        return $categoryList;
    }

    /**
     * Возвращает список категорий на сайт
     * @return array <p>Массив с товарами</p>
     */
    public static function getCategoryListSite($parent_id = '0')
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Получение и возврат результатов
        $result = $db->query("SELECT * FROM category WHERE parent_id = $parent_id AND status = '1' ORDER BY sort ASC");
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['parent_id'] = $row['parent_id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['description'] = $row['description'];
            $categoryList[$i]['sort'] = $row['sort'];
            $categoryList[$i]['status'] = $row['status'];
            $categoryList[$i]['last'] = $row['last'];
            $i++;
        }
        return $categoryList;
    }

    /**
     * Возвращает category_breadcramb с указанным id
     * @param integer $id <p>id bannera</p>
     * @return array <p>Массив с информацией о bannere</p>
     */
    public static function getCategoryById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM category WHERE id = :id';

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
     * @param array $options <p>Массив с информацией о слайде</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createCategory($options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO category '
            . '(parent_id, name, sort, status, last)'
            . 'VALUES '
            . '(:parent_id, :name, :sort, :status, :last)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':parent_id', $options['parent_id'], PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        $result->bindParam(':last', $options['last'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

    /**
     * Редактирует banner с заданным id
     * @param integer $id <p>id bannera</p>
     * @param array $options <p>Массив с информацей о bannere</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateCategoryById($id, $options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE category
            SET
                name = :name,
                status = :status,
                sort = :sort,
                last = :last
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        $result->bindParam(':last', $options['last'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Редактирует banner с заданным id
     * @param integer $id <p>id bannera</p>
     * @param array $options <p>Массив с информацей о bannere</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateCategoryDescriptionById($id, $description)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE category
            SET
                description = :description
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Возвращает название категории по id
     * @param integer $id <p>id менеджера</p>
     * @return array <p>Массив с информацией о менеджере</p>
     */
    public static function getNameCategoryById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM category WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // получаем массив с категорией
        $row =$result->fetch();
        // вытягиваем из массива имя менеджера
        $row = $row['name'];
        // Возвращаем данные
        return $row;
    }



    /**
     * Удаляет категорию с указанным id
     * @param integer $id <p>id товара</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteCategoryById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM category WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * Возвращает текстое пояснение наличия товара:<br/>
     * <i>0 - Под заказ, 1 - В наличии</i>
     * @param integer $availability <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getStatusCategory($status)
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

}