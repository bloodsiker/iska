<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class User
{

    public static function getUserListAdmin()
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM admin ORDER BY id';

        $result = $db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public static function getUserById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM admin WHERE id = :id';

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
    public static function createUser($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO admin '
            . '(login, password, name, email, role,  data_create)'
            . 'VALUES '
            . '(:login, :password, :name, :email, :role, :data_create)';

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
     * @param $id
     * @param $options
     *
     * @return bool
     */
    public static function updateUserById($id, $options)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE admin
            SET
                login = :login,
                password = :password,
                name = :name,
                email = :email,
                role = :role,
                data_update = :data_update
            WHERE id = :id";

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
     * @param $id
     *
     * @return bool
     */
    public static function deleteUserById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM admin WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }


    /**
     * @param $availability
     *
     * @return string
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