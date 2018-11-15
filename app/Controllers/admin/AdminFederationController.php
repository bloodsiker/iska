<?php

namespace App\app\Controllers\admin;

use App\app\Models\About;
use App\app\Models\Federation;
use App\app\Models\Representative;
use App\components\AdminBase;

class AdminFederationController extends AdminBase
{

    public function actionLeadership()
    {
        // Проверка доступа
        self::checkAdmin();

        $federation = Federation::getActivityById(1);

        // Обработка формы
        if (isset($_POST['update'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $text = $_POST['text'];

            Federation::updateActivityById(1, $text);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        require_once(ROOT . '/views/admin_cabinet/admin_federation/leadership.php');
        return true;

    }


    /**
     * Action для страницы "Редактировать новость"
     */
    public function actionCalendar()
    {
        // Проверка доступа
        self::checkAdmin();

        $federation = Federation::getActivityById(2);

        // Обработка формы
        if (isset($_POST['update'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $text = $_POST['text'];


            Federation::updateActivityById(2, $text);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_federation/calendar.php');
        return true;
    }

    /**
     * Action для страницы "Редактировать новость"
     */
    public function actionRules()
    {
        // Проверка доступа
        self::checkAdmin();

        $federation = Federation::getActivityById(3);

        // Обработка формы
        if (isset($_POST['update'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $text = $_POST['text'];


            Federation::updateActivityById(3, $text);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_federation/rules.php');
        return true;
    }


    public function actionPosition()
    {
        // Проверка доступа
        self::checkAdmin();

        //$federation = Federation::getActivityById(4);

        $listPosition = Federation::getListPosition();


        if(isset($_POST['add_position'])){
            $name = $_FILES['file']['name'];
            $options['title'] = $_POST['title'];

            // Все загруженные файлы помещаются в эту папку
            $options['path'] = "/upload/docs/";
            $randomName = substr_replace(sha1(microtime(true)), '', 12);

            // Получаем расширение файла
            $getMime = explode('.', $name);
            $mime = end($getMime);

            $randomName =  $randomName . "." . $mime;
            $options['file'] = $randomName;

            Federation::createPosition($options);

            // Проверим, загружалось ли через форму изображение
            if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
                // Если загружалось, переместим его в нужную папке, дадим новое имя
                move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $options['path'] . $options['file']);
            }

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        if(isset($_POST['update_position'])){
            $id = $_POST['id_position'];
            $title = $_POST['title'];

            Federation::updatePositionById($id, $title);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_federation/position.php');
        return true;
    }

    public function actionAjaxPosition()
    {
        // Проверка доступа
        self::checkAdmin();

        if($_REQUEST['action'] == 'position'){
            $id_pos = $_REQUEST['position_id'];
            $result = Federation::getPositionById($id_pos);
            print_r($result['title']);
        }


        return true;
    }

    public function actionDeletePosition($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Если форма отправлена
        // Удаляем фото
        Federation::deletePositionById($id);

        // Перенаправляем пользователя на страницу управлениями товарами
        header("Location: " . $_SERVER['HTTP_REFERER']);

        return true;
    }

    public function actionListRegions()
    {
        self::checkAdmin();

        $regions = Representative::getAllRegions();

        if (isset($_POST['update'])) {
            $text = $_POST['text'];
            $title = $_POST['title'];

            About::updateCongratulation(2, $text, $title);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        require_once(ROOT . '/views/admin_cabinet/admin_federation/representative/regions.php');
        return true;
    }

    public function actionClubsInRegion($id)
    {
        self::checkAdmin();

        $region = Representative::getInfoRegion($id);
        $regionClubs = Representative::getRegionClubs($id);
        $regionEmails = Representative::getEmailsRegionClubs($id);
        $regionPhones = Representative::getPhonesRegionClubs($id);

        if (isset($_POST['add_club'])) {
            $city = $_POST['city'];
            $club = $_POST['club'];

            Representative::createClub($id, $city, $club);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        if (isset($_POST['add_email'])) {
            $email = $_POST['email'];

            Representative::createEmailClub($id, $email);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        if (isset($_POST['edit_representative'])) {
            $representative = $_POST['representative'];

            Representative::updateRepresentativeById($id, $representative);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        if (isset($_POST['add_phone'])) {
            $phone = $_POST['phone'];

            Representative::createPhoneClub($id, $phone);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        if (isset($_POST['delete_club']) && $_POST['delete_club'] === 'true') {
            $id = $_POST['id'];

            Representative::deleteClubById($id);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        if (isset($_POST['delete_email']) && $_POST['delete_email'] === 'true') {
            $id = $_POST['id'];

            Representative::deleteEmailById($id);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        if (isset($_POST['delete_phone']) && $_POST['delete_phone'] === 'true') {
            $id = $_POST['id'];

            Representative::deletePhoneById($id);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        require_once(ROOT . '/views/admin_cabinet/admin_federation/representative/region_clubs.php');
        return true;
    }

}