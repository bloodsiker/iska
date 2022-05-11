<?php

namespace App\app\Controllers\admin;

use App\app\Models\Admin;
use App\app\Models\Banner;
use App\app\Models\Event;
use App\components\AdminBase;
use Josantonius\Request\Request;
use Josantonius\Session\Session;
use Josantonius\Url\Url;
use Verot\Upload\Upload;

/**
 * Class AdminController
 */
class AdminController extends AdminBase
{

    const PATH_EVENT_UPLOAD = "/upload/events/";
    const PATH_SLIDER_UPLOAD = "/upload/slider/";

    public function actionIndex()
    {
        self::checkAdmin();

        $bannersList = Banner::getBannersListAdmin();
        $eventList = Event::getListEventByAdmin();

        if (Request::post('add_banner')) {
            $options['status'] = Request::post('status');
            $options['link'] = Request::post('link');
            $options['sort'] = Request::post('sort');
            $options['text'] = Request::post('text');
            $options['path'] = self::PATH_SLIDER_UPLOAD;

            if (Request::files('image')) {
                $handle = new Upload(Request::files('image'));
                if ($handle->uploaded) {
                    $handle->allowed = ['image/jpeg','image/jpg','image/png'];
                    $handle->file_new_name_body = substr_replace(sha1(microtime(true)), '', 12);
                    $handle->image_resize = true;
                    $handle->image_x = 660;
                    $handle->image_ratio_y = true;
                    $options['img'] = $handle->file_new_name_body . '.' . $handle->file_src_name_ext;
                    $handle->process(ROOT . $options['path']);
                    if ($handle->processed) {
                        $handle->clean();
                        Banner::createBanner($options);
                    }
                }
            }

            Url::previous();
        }

        if (Request::post('add_event')) {
            $options['title'] = Request::post('title');
            $options['status'] = Request::post('status');
            $options['path'] = self::PATH_EVENT_UPLOAD;

            if (Request::files('image')) {
                $handle = new Upload(Request::files('image'));
                if ($handle->uploaded) {
                    $handle->allowed = ['image/jpeg','image/jpg','image/png'];
                    $handle->file_new_name_body = substr_replace(sha1(microtime(true)), '', 12);
                    $handle->image_resize = true;
                    $handle->image_x = 600;
                    $handle->image_ratio_y = true;
                    $options['img'] = $handle->file_new_name_body . '.' . $handle->file_src_name_ext;
                    $handle->process(ROOT . $options['path']);
                    if ($handle->processed) {
                        $handle->clean();
                        Event::createEvent($options);
                    }
                }
            }
            Url::previous();
        }

        $this->render('admin_cabinet/admin/index', compact('bannersList', 'eventList'));
        return true;
    }

    public function actionEventUpdate($id)
    {
        self::checkAdmin();

        $event = Event::getEventById($id);

        if (isset($_POST['update'])) {
            $options['title'] = $_POST['title'];
            $options['status'] = $_POST['status'];

            $ok = Event::updateEventById($id, $options);

            if($ok){
                Url::redirect('/admin');
            }
        }

        require_once(ROOT . '/views/admin_cabinet/admin/update_event.php');
        return true;
    }

    /**
     * Action для страницы "Удалить событие"
     */
    public function actionEventDelete($id)
    {
        self::checkAdmin();

        Event::deleteEventById($id);

        Url::redirect('/admin');

        return true;
    }

    /**
     * Action для страницы "Удалить баннер"
     */
    public function actionBannerDelete($id)
    {
        self::checkAdmin();

        Banner::deleteBannerById($id);
        Url::redirect('/admin');

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

