<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class User
{

    /**
     * Возвращает список пользователей в админ-панель
     * @return array <p>Массив с товарами</p>
     */
    public static function getUserListAdmin()
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Получение и возврат результатов
        $result = $db->query("SELECT * FROM admin ORDER BY id ASC");
        $userList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $userList[$i]['id'] = $row['id'];
            $userList[$i]['login'] = $row['login'];
            $userList[$i]['name'] = $row['name'];
            $userList[$i]['email'] = $row['email'];
            $userList[$i]['role'] = $row['role'];
            $userList[$i]['data_create'] = $row['data_create'];
            $userList[$i]['data_update'] = $row['data_update'];
            $i++;
        }
        return $userList;
    }

    /**
     * Возвращает данные юзера с указанным id
     * @param integer $id <p>id юзера</p>
     * @return array <p>Массив с информацией о пользователю</p>
     */
    public static function getUserById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM admin WHERE id = :id';

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
     * Добавляет нового пользователя
     * @param array $options <p>Массив с информацией о пользователе</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createUser($options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO admin '
            . '(login, password, name, email, role,  data_create)'
            . 'VALUES '
            . '(:login, :password, :name, :email, :role, :data_create)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':login', $options['login'], PDO::PARAM_STR);
        $result->bindParam(':password', $options['password'], PDO::PARAM_STR);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $result->bindParam(':role', $options['role'], PDO::PARAM_STR);
        $result->bindParam(':data_create', $options['data_create'], PDO::PARAM_STR);

        return $result->execute();
    }


    /**
     * Редактирует banner с заданным id
     * @param integer $id <p>id bannera</p>
     * @param array $options <p>Массив с информацей о bannere</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateUserById($id, $options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE admin
            SET
                login = :login,
                password = :password,
                name = :name,
                email = :email,
                role = :role,
                data_update = :data_update
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':login', $options['login'], PDO::PARAM_STR);
        $result->bindParam(':password', $options['password'], PDO::PARAM_STR);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $result->bindParam(':role', $options['role'], PDO::PARAM_STR);
        $result->bindParam(':data_update', $options['data_update'], PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Удаляет пользователя с указанным id
     * @param integer $id <p>id товара</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteUserById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM admin WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Проверяет имя: не меньше, чем 2 символа
     * @param string $name <p>Имя</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }


    /**
     * Возвращает текстое пояснение доступа прав:<br/>
     * @param integer $availability <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getAvailabilityRole($availability)
    {
        switch ($availability) {
            case 'admin':
                return 'Администратор';
                break;
            case 'manager':
                return 'Менеджер';
                break;
        }
    }

}