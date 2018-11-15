<?php

namespace App\app\Controllers\admin;

use App\app\Models\User;
use App\components\AdminBase;

class AdminUserController extends AdminBase
{

    public function actionIndex()
    {

        // Проверка доступа
        self::checkAdmin();

        $users = User::getUserListAdmin();

        // Обработка формы
        $data_create = date("Y-m-d");
        if (isset($_POST['create'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['login'] = $_POST['login'];
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['password'] = $_POST['password'];
            $options['role'] = $_POST['role'];
            $options['data_create'] = $data_create;

            // Сохраняем изменения
            User::createUser($options);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/user");
        }


        require_once(ROOT . '/views/admin_cabinet/admin_user/index.php');
        return true;
    }


    /**
     * Action для страницы "Редактировать данные пользователя"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();


        // Получаем данные о конкретной пользователе
        $user = User::getUserById($id);

        // Обработка формы
        $data_update = date("Y-m-d");
        if (isset($_POST['update'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['login'] = $_POST['login'];
            $options['password'] = $_POST['password'];
            $options['name'] = $_POST['name'];
            $options['email'] = $_POST['email'];
            $options['role'] = $_POST['role'];
            $options['data_update'] = $data_update;

            // Сохраняем изменения
            User::updateUserById($id, $options);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/user");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_user/update.php');
        return true;
    }


    /**
     * Action для страницы "Удалить пользователя"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        $user = User::getUserById($id);

        // Обработка формы
        if (isset($_POST['delete'])) {
            // Если форма отправлена
            // Удаляем товар
            User::deleteUserById($id);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/user");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_user/delete.php');
        return true;
    }


}