<?php

namespace App\app\Controllers\admin;

use App\app\Models\Media;
use App\components\AdminBase;
use Josantonius\Request\Request;
use Josantonius\Url\Url;
use upload as FileUpload;

class AdminMediaController extends AdminBase
{

    /**
     * Екшен для страници со списком фото-альбомов в админке
     * @return bool
     */
    public function actionPhoto()
    {
        self::checkAdmin();
        $albumList = Media::getListAlbum(0);

        if (isset($_POST['add_album'])){
            $options['title'] = $_POST['title'];
            $options['sort'] = $_POST['sort'];

            $id = Media::createAlbum($options);

            if ($id && Request::files('image')) {
                $handle = new FileUpload(Request::files('image'));
                if ($handle->uploaded) {
                    $handle->_mkdir(ROOT."/upload/media/photo/{$id}");
                    $handle->allowed = ['image/jpeg','image/jpg','image/png'];
                    $handle->file_new_name_body = $id;
                    $options['path'] = "/upload/media/photo/";
                    $options['img'] = $handle->file_new_name_body . '.' . $handle->file_src_name_ext;
                    $handle->process(ROOT . $options['path']);
                    if ($handle->processed) {
                        $handle->clean();
                        Media::updateAlbumPathById($id, $options);
                    }
                }
                Url::previous();
            }
        }

        $this->render('admin_cabinet/admin_media/photo/photo', compact('albumList'));
        return true;
    }


    /**
     * Екшен для страници со списком фото-альбомов в админке
     * @param $id
     * @return bool
     */
    public function actionPhotoUpdate($id)
    {
        self::checkAdmin();

        $album = Media::getAlbumById($id);

        if(isset($_POST['update'])){
            $options['title'] = $_POST['title'];
            $options['sort'] = $_POST['sort'];
            $options['archive'] = $_POST['archive'];

            if (Media::updateAlbumById($id, $options)) {
                $handle = new FileUpload(Request::files('image'));
                if ($handle->uploaded) {
                    $handle->allowed = ['image/jpeg','image/jpg','image/png'];
                    $handle->file_new_name_body = $id;
                    $handle->file_overwrite = true;
                    $options['path'] = "/upload/media/photo/";
                    $options['img'] = $handle->file_new_name_body . '.' . $handle->file_src_name_ext;
                    $handle->process(ROOT . $options['path']);
                    if ($handle->processed) {
                        $handle->clean();
                    }
                }
                Url::redirect('/admin/media/photo');
            }
        }

        $this->render('admin_cabinet/admin_media/photo/photo_update', compact('album'));
        return true;
    }


    // Просмотр и добавление фото в альбом
    public function actionPhotoView($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Информация о фото-альбоме
        $album = Media::getAlbumById($id);

        // Список фотографий в альбоме
        $photoList = Media::getPhotoByListAlbum($id);

        // Обработка формы
        if (isset($_POST['add_photo'])) {

            // Если форма отправлена
            // Получаем данные из формы
            $name = $_FILES['image']['name'];
            $options['id_album'] = $id;

            // Все загруженные файлы помещаются в эту папку
            $options['path'] = "/upload/media/photo/" . $id . "/";
            $randomName = substr_replace(sha1(microtime(true)), '', 12);

            // Получаем расширение файла
            $getMime = explode('.', $name);
            //$mime = end($getMime);

            $randomName =  $randomName . "." . $getMime['1'];
            $options['img'] = $randomName;

            // Если запись добавлена
            if ($id) {
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $options['path'] . $options['img'])){
                        Media::createPhoto($options);
                    }
                }
            };

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        require_once(ROOT . '/views/admin_cabinet/admin_media/photo/photo_view.php');
        return true;
    }

    public function actionPhotoArhive()
    {
        // Проверка доступа
        self::checkAdmin();

        // Список альбомов
        $albumList = Media::getListAlbum(1);


        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_media/photo/photo_arhive.php');
        return true;
    }

    /**
     * Action для страницы "Удалить фото-альбом"
     */
    public function actionDeletePhotoAlbum($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Если форма отправлена
        // Удаляем фото-альбом
        Media::deleteAlbumById($id);

        // Перенаправляем пользователя на страницу управлениями товарами
        header("Location: " . $_SERVER['HTTP_REFERER']);

        return true;
    }

    /**
     * Action для страницы "Удалить фото"
     */
    public function actionDeletePhoto($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Если форма отправлена
        // Удаляем фото
        Media::deletePhotoById($id);

        // Перенаправляем пользователя на страницу управлениями товарами
        header("Location: " . $_SERVER['HTTP_REFERER']);

        return true;
    }




    /**
     * Екшен для страници со списком фото-альбомов в админке
     * @return bool
     */
    public function actionVideo()
    {
        // Проверка доступа
        self::checkAdmin();

        // Список видео
        $videoList = Media::getVideoList(0);

        if(isset($_POST['add_video'])){
            $options['title'] = $_POST['title'];
            $options['sort'] = $_POST['sort'];
            $options['url'] = $_POST['url'];
            $video_url = Functions::crop_video_url($options['url']);
            $options['url'] = "https://www.youtube.com/embed/" . $video_url;

            $id = Media::createVideo($options);

            if($id){
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя

                    // Все загруженные файлы помещаются в эту папку
                    $name = $_FILES['image']['name'];
                    $options['path'] = "/upload/media/video/";
                    //$randomName = substr_replace(sha1(microtime(true)), '', 12);

                    // Получаем расширение файла
                    $getMime = explode('.', $name);
                    //$mime = end($getMime);

                    $name =  $id . "." . $getMime['1'];
                    $options['img'] = $name;

                    // перемещаем файл в нужную нам папку
                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $options['path'] . $options['img'])) {
                        Media::updateVideothById($id, $options);
                    }
                }

                header("Location: " . $_SERVER['HTTP_REFERER']);
            }

        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_media/video/video.php');
        return true;
    }

    /**
     * Екшен для страници со списком видео в админке
     * @return bool
     */
    public function actionVideoUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        //  Информация о фото-альбоме
        $video = Media::getVideoById($id);

        if(isset($_POST['update'])){
            $options['title'] = $_POST['title'];
            $options['url'] = $_POST['url'];
            $options['sort'] = $_POST['sort'];
            $options['archive'] = $_POST['archive'];
            //$video_url = Functions::crop_video_url($options['url']);
            //$options['url'] = "https://www.youtube.com/embed/" . $video_url;

            $ok = Media::updateVideoById($id, $options);

            if ($ok) {

                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                    // Все загруженные файлы помещаются в эту папку
                    $name = $_FILES['image']['name'];
                    $options['path'] = "/upload/media/video/";

                    // Получаем расширение файла
                    $getMime = explode('.', $name);
                    //$mime = end($getMime);

                    $name = $id . "." . $getMime['1'];
                    $options['img'] = $name;

                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $options['path'] . $options['img'])){
                        Media::updateVideothById($id, $options);
                    }

                }

                header("Location: /admin/media/video");
            }

        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_media/video/video_update.php');
        return true;
    }

    public function actionVideoArhive()
    {
        // Проверка доступа
        self::checkAdmin();

        // Список видео
        $videoList = Media::getVideoList(1);


        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_media/video/video_arhive.php');
        return true;
    }


    /**
     * Action для страницы "Удалить видео"
     */
    public function actionDeleteVideo($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Если форма отправлена
        // Удаляем фото
        Media::deleteVideoById($id);

        // Перенаправляем пользователя на страницу управлениями товарами
        header("Location: " . $_SERVER['HTTP_REFERER']);

        return true;
    }

}