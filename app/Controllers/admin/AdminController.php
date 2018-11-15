<?php

namespace App\app\Controllers\admin;

use App\app\Models\Admin;
use App\app\Models\Banner;
use App\app\Models\Event;
use App\components\AdminBase;
use Josantonius\Session\Session;
use Josantonius\Url\Url;

/**
 * Контроллер AdminController
 * Главная страница в админпанели
 */
class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        self::checkAdmin();

        $adminId = Admin::CheckLogged();

        $admin = Admin::getAdminById($adminId);
        $bannersList = Banner::getBannersListAdmin();
        $eventList = Event::getListEventByAdmin();

        if (isset($_POST['add_banner'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_FILES['image']['name'];
            $options['status'] = $_POST['status'];
            $options['link'] = $_POST['link'];
            $options['sort'] = $_POST['sort'];
            $options['text'] = $_POST['text'];


            // Все загруженные файлы помещаются в эту папку
            $options['path'] = "/upload/slider/";
            $randomName = substr_replace(sha1(microtime(true)), '', 12);

            // Получаем расширение файла
            $getMime = explode('.', $name);
            //$mime = end($getMime);

            $randomName =  $randomName . "." . $getMime['1'];
            $options['img'] = $randomName;


            // Если ошибок нет
            // Добавляем новый товар
            $id = Banner::createBanner($options);

            // Если запись добавлена
            if ($id) {
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $options['path'] . $options['img']);
                }
            }

            Url::previous();
        }


        // Обработка формы
        if (isset($_POST['add_event'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_FILES['image']['name'];
            $options['title'] = $_POST['title'];
            $options['status'] = $_POST['status'];

            // Все загруженные файлы помещаются в эту папку
            $options['path'] = "/upload/events/";
            $randomName = substr_replace(sha1(microtime(true)), '', 12);

            // Получаем расширение файла
            $getMime = explode('.', $name);
            //$mime = end($getMime);

            $randomName =  $randomName . "." . $getMime['1'];
            $options['img'] = $randomName;


            // Флаг ошибок в форме
            $errors = false;

            if (!isset($options['title']) || empty($options['title'])) {
                $errors[] = 'Заполните поле Название';
            }

            if ($errors == false) {
                $id = Event::createEvent($options);

                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $options['path'] . $options['img']);
                    }
                }

                Url::previous();
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin/index.php');
        return true;
    }

    public function actionEventUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

         $event = Event::getEventById($id);

        if (isset($_POST['update'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['title'] = $_POST['title'];
            $options['status'] = $_POST['status'];

            $ok = Event::updateEventById($id, $options);

            if($ok){
                Url::redirect('/admin');
            }
        }


        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin/update_event.php');
        return true;
    }

    /**
     * Action для страницы "Удалить событие"
     */
    public function actionEventDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Удаляем евент
        Event::deleteEventById($id);

        Url::redirect('/admin');

        return true;
    }

    /**
     * Action для страницы "Удалить баннер"
     */
    public function actionBannerDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Удаляем банер
        Banner::deleteBannerById($id);

        Url::redirect('/admin');

        // Подключаем вид
        return true;
    }

    /**
     * @return bool
     */
    public function actionAuth(){

        $login = '';
        $password = '';

        if(isset($_POST['submit'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $errors = false;

            if (!Admin::checkLogin($login)) {
                $errors[] = 'Не верный логин';
            }

            //Проверяем существует ли пользователь
            $adminId = Admin::checkAdminData($login, $password);

            if ($adminId == false){
                $errors[] = 'Не правильные данные для входа в админку';
            } else {
                Admin::auth($adminId);

                Url::redirect('/admin');
            }
        }

        require_once(ROOT . '/views/admin_cabinet/admin/auth.php');
        return true;

    }

    /**
     * Logout
     */
    public function actionLogout()
    {
        Session::destroy('admin');
        Url::redirect('/admin');
    }

}

