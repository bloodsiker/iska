<?php

namespace App\components;

use App\app\Models\Admin;
use App\vendor\controller\Controller;

/**
 * Абстрактный класс AdminBase содержит общую логику для контроллеров, которые
 * используются в панели администратора
 */
abstract class AdminBase extends Controller
{
    /**
     * Метод, который проверяет пользователя на то, является ли он администратором
     * @return boolean
     */
    public static function checkAdmin()
    {
        $adminId = Admin::checkLogged();

        $admin = Admin::getAdminById($adminId);

        if ($admin['role'] == 'admin' || $admin['role'] == 'moderator') {
            return true;
        }
        die('Доступ закрыт');
    }

}
