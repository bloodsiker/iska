<?php

namespace App\app\Controllers\admin;

use App\app\Models\About;
use App\components\AdminBase;
use Josantonius\Url\Url;

class AdminAboutController extends AdminBase
{

    /**
     * Action для страницы "История розвития"
     */
    public function actionHistory()
    {
        self::checkAdmin();

        $history = About::getHistory(1);

        if (isset($_POST['update'])) {
            $text = $_POST['text'];

            About::updateHistory(1, $text);

            Url::previous();
        }



        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_about/history.php');
        return true;
    }


    public function actionCongratulation()
    {
        self::checkAdmin();

        $congratulation = About::getHistory(2);

        if (isset($_POST['update'])) {
            $text = $_POST['text'];
            $title = $_POST['title'];

            About::updateCongratulation(2, $text, $title);

            Url::previous();
        }

        require_once(ROOT . '/views/admin_cabinet/admin_about/congratulation.php');
        return true;
    }
}