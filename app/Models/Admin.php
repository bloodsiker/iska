<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use Josantonius\Session\Session;
use Josantonius\Url\Url;
use PDO;


class Admin
{
    /**
     * @param $login
     * @param $password
     *
     * @return bool
     */
    public static function checkAdminData($login, $password)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM admin WHERE login = :login AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        $admin = $result->fetch(PDO::FETCH_ASSOC);

        if ($admin) {
            return $admin['id'];
        }
        return false;
    }


    /**
     * @param $adminId
     */
    public static function auth($adminId)
    {
        Session::set('admin', $adminId);
    }


    /**
     * @return mixed
     */
    public static function checkLogged()
    {
        if (Session::get('admin')) {
            return Session::get('admin');
        }

        Url::redirect('/admin/auth');
    }


    /**
     * @param $login
     *
     * @return bool
     */
    public static function checkLogin($login)
    {
        if (strlen($login) >= 2) {
            return true;
        }
        return false;
    }


    /**
     * @param $password
     *
     * @return bool
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public static function getAdminById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM admin WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        return $result->fetch(PDO::FETCH_ASSOC);
    }
}