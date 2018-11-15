<?php

namespace App\app\Controllers\admin;

use App\app\Models\News;
use App\components\AdminBase;
use Josantonius\Request\Request;
use Josantonius\Url\Url;
use upload as FileUpload;

class AdminNewsController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();

        $newsList = News::getNewsListAdmin();

        if (isset($_POST['create'])) {

            $name = $_FILES['image']['name'];
            $options['category'] = $_POST['category'];
            $options['title'] = $_POST['title'];
            $options['text'] = $_POST['text'];
            $options['description'] = $_POST['description'];
            $options['status'] = $_POST['status'];
            $options['data_create'] = $_POST['data_create'];


            // Все загруженные файлы помещаются в эту папку
            $options['path'] = "/upload/news/" . $options['category'] . "/";
            $randomName = substr_replace(sha1(microtime(true)), '', 12);

            // Получаем расширение файла
            $getMime = explode('.', $name);
            //$mime = end($getMime);

            $randomName =  $randomName . "." . $getMime['1'];
            $options['img'] = $randomName;

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['title']) || empty($options['title'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новость
                $id = News::createNews($options);

                // Если запись добавлена
                if ($id) {
                    dd($_SERVER['DOCUMENT_ROOT'] . $options['path'] . $options['img']);
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $options['path'] . $options['img']);
                    }
                };

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/news");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_news/index.php');
        return true;

    }


    /**
     * Action для страницы "Редактировать новость"
     */
    public function actionUpdate($id)
    {
        self::checkAdmin();

        $news = News::getNewsById($id);

        $imgListNews = News::getImgNewsList($id);

        if (isset($_POST['update'])) {
            $options['category'] = $_POST['category'];
            $options['title'] = $_POST['title'];
            $options['description'] = $_POST['description'];
            $options['text'] = $_POST['text'];
            $options['status'] = $_POST['status'];
            $options['data_create'] = $_POST['data_create'];

            if (News::updateNewsById($id, $options)) {

                if (Request::files('image')) {
                    $handle = new FileUpload(Request::files('image'));
                    if ($handle->uploaded) {
                        $handle->allowed = array('image/jpeg','image/jpg','image/png');
                        $handle->file_new_name_body = substr_replace(sha1(microtime(true)), '', 12);
//                        $handle->image_resize       = true;
//                        if(($handle->image_x / $handle->image_y >= 1.3) || ($handle->image_x / $handle->image_y <= 1.8)){
//                            $handle->image_x              = 320;
//                            $handle->image_y              = 240;
//                        } else {
//                            $handle->image_x              = 320;
//                            $handle->image_ratio_y        = true;
//                        }
                        $path = "/upload/news/" . $options['category'] . "/";
                        $imgName = $handle->file_new_name_body . '.' . $handle->file_src_name_ext;
                        $handle->process(ROOT . $path);
                        if ($handle->processed) {
                            $handle->clean();
                            News::updateNewsImagesById($id, $path, $imgName );
                        }
                    }
                }
            }

            Url::redirect('/admin/news');
        }


        if (isset($_POST['add_img'])) {

            $name = $_FILES['image']['name'];
            $path = "/upload/news/images/";
            $randomName = substr_replace(sha1(microtime(true)), '', 12);

            // Получаем расширение файла
            $getMime = explode('.', $name);
            //$mime = end($getMime);

            $randomName =  $randomName . "." . $getMime['1'];
            $imgName = $randomName;

            $news_id = $id;


            // Если запись сохранена
            // Проверим, загружалось ли через форму изображение
            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                // Если загружалось, переместим его в нужную папке, дадим новое имя
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $path . $imgName )) {

                    News::createImgNews($news_id, $path, $imgName);
                }
            }

            Url::previous();
        }

        $this->render('admin_cabinet/admin_news/update', compact('news', 'imgListNews'));
        return true;
    }

    /**
     * Action для страницы "Удалить фото из новости"
     */
    public function actionDeleteImgByNews($id)
    {
        self::checkAdmin();

        $imgInfo = News::getImgById($id);

        $ok = News::deletfile($imgInfo['path'],$imgInfo['img']);

        if($ok){
            News::deleteFileById($id);
        }
        Url::previous();

        return true;
    }


    /**
     * Action для страницы "Удалить новость"
     */
    public function actionDelete($id)
    {
        self::checkAdmin();

        $news = News::getNewsById($id);

        if (Request::post('delete')) {
            News::deleteNewsById($id);
            Url::redirect('/admin/news');
        }

        $this->render('admin_cabinet/admin_news/delete', compact('news'));
    }

}