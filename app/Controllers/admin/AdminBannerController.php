<?php

namespace App\app\Controllers\admin;

use App\app\Models\Banner;
use App\components\AdminBase;

class AdminBannerController extends AdminBase
{


    /**
     * Action для страницы "Редактировать banner"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        $banner = Banner::getBannerById($id);

        // Обработка формы
        if (isset($_POST['update'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['link'] = $_POST['link'];
            $options['text'] = $_POST['text'];
            $options['status'] = $_POST['status'];
            $options['sort'] = $_POST['sort'];

            // Сохраняем изменения
            if (Banner::updateBannerById($id, $options)) {

                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                    $name = $_FILES['image']['name'];
                    // Все загруженные файлы помещаются в эту папку
                    $path = "/upload/slider/";
                    $randomName = substr_replace(sha1(microtime(true)), '', 12);

                    // Получаем расширение файла
                    $getMime = explode('.', $name);
                    //$mime = end($getMime);

                    $randomName =  $randomName . "." . $getMime['1'];
                    $imgName = $randomName;

                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $path . $imgName)){
                        Banner::updateBannerImagesById($id, $path, $imgName );
                    }
                }
            }

            header("Location: /admin");
        }

        require_once(ROOT . '/views/admin_cabinet/admin_banner/update.php');
        return true;
    }

    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Если форма отправлена
        // Удаляем товар
        Banner::deleteBannerById($id);

        header("Location: /admin/index");
        // Подключаем вид
        //require_once(ROOT . '/views/admin_cabinet/admin_news/delete.php');
        return true;
    }


}