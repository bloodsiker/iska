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
        // Проверяем авторизирован ли пользователь. Если нет, он будет переадресован
        $adminId = Admin::checkLogged();

        // Получаем информацию о текущем пользователе
        $admin = Admin::getAdminById($adminId);

        // Если роль текущего пользователя "admin", пускаем его в админпанель
        if ($admin['role'] == 'admin' || $admin['role'] == 'moderator') {
            return true;
        }

        // Иначе завершаем работу с сообщением об закрытом доступе
        die('Доступ закрыт');
    }

}
