<?php

namespace App\app\Controllers\admin;

use App\app\Models\Activity;
use App\components\AdminBase;

class AdminActivityController extends AdminBase
{

    public function actionPatriotic()
    {
        // Проверка доступа
        self::checkAdmin();

        $activity = Activity::getActivityById(1);

        // Обработка формы
        // Обработка формы
        if (isset($_POST['update'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $text = $_POST['text'];

            Activity::updateActivityById(1, $text);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        require_once(ROOT . '/views/admin_cabinet/admin_activity/national_patriotic.php');
        return true;

    }


    /**
     * Action для страницы "Редактировать новость"
     */
    public function actionScientific()
    {
        // Проверка доступа
        self::checkAdmin();

        $activity = Activity::getActivityById(2);

        // Обработка формы
        if (isset($_POST['update'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $text = $_POST['text'];


            Activity::updateActivityById(2, $text);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_activity/scientific.php');
        return true;
    }


}