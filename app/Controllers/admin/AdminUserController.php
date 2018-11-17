<?php

namespace App\app\Controllers\admin;

use App\app\Models\User;
use App\components\AdminBase;
use Josantonius\Url\Url;

class AdminUserController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();

        $users = User::getUserListAdmin();

        $data_create = date("Y-m-d");
        if (isset($_POST['create'])) {
            $options['login'] = $_POST['login'];
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['password'] = $_POST['password'];
            $options['role'] = $_POST['role'];
            $options['data_create'] = $data_create;

            User::createUser($options);
            Url::redirect('/admin/user');
        }

        $this->render('admin_cabinet/admin_user/index', compact('users'));
        return true;
    }


    /**
     * Action для страницы "Редактировать данные пользователя"
     */
    public function actionUpdate($id)
    {
        self::checkAdmin();

        $user = User::getUserById($id);

        if (isset($_POST['update'])) {
            $options['login'] = $_POST['login'];
            $options['password'] = $_POST['password'];
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['role'] = $_POST['role'];
            $options['data_update'] = date("Y-m-d");

            User::updateUserById($id, $options);
            Url::redirect('/admin/user');
        }

        $this->render('admin_cabinet/admin_user/update', compact('user'));
        return true;
    }

    /**
     * Action для страницы "Удалить пользователя"
     */
    public function actionDelete($id)
    {
        self::checkAdmin();

        $user = User::getUserById($id);

        if (isset($_POST['delete'])) {
            User::deleteUserById($id);
            Url::redirect('/admin/user');
        }

        $this->render('admin_cabinet/admin_user/delete', compact('user'));
        return true;
    }


}