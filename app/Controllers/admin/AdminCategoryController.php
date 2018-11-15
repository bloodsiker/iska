<?php

namespace App\app\Controllers\admin;

use App\app\Models\Banner;
use App\app\Models\Category;
use App\components\AdminBase;

class AdminCategoryController extends AdminBase
{

    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        $categoryList = Category::getCategoryListAdmin();


        // Обработка формы
        if (isset($_POST['create'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['parent_id'] = '0';
            $options['name'] = $_POST['name'];
            $options['status'] = $_POST['status'];
            $options['sort'] = $_POST['sort'];
            if(isset($_POST['last'])) {
                $options['last'] = $_POST['last'];
            } else {
                $options['last'] = 0;
            }


            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поле Название';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую категорию
                $id = Category::createCategory($options);

                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/category_img/bg-category-{$id}.jpg");
                    }
                }

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/category");
            }
        }

        require_once(ROOT . '/views/admin_cabinet/admin_category/index.php');
        return true;

    }



    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        $categoryId = Category::getCategoryById($id);

        if(isset($_POST['update'])) {
            $options['name'] = $_POST['name'];
            $options['status'] = $_POST['status'];
            $options['sort'] = $_POST['sort'];

            $id = Category::updateCategoryById($id, $options);

            if ($id) {
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/category_img/bg-category-{$id}.jpg");
                }
            }

            header("Location: /admin/category");

        }

        require_once(ROOT . '/views/admin_cabinet/admin_category/update.php');
        return true;

    }


    public function actionView($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список подкатегорий
        $categoryList = Category::getCategoryListAdmin($id);

        // Получаем информацию о категории
        $categoryId = Category::getCategoryById($id);

        // Получаем список баннеров для каждой категории
        $bannersList = Banner::getBannersListAdmin($id);

        $result = '';

        if(isset($_POST['update'])) {
            $description = $_POST['description'];

            $id = Category::updateCategoryDescriptionById($id, $description);

            if($id) {
                $result = 'Изменение применены';
            }
            header("Location: " . $_SERVER['HTTP_REFERER']);

        }

        if (isset($_POST['create'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['parent_id'] = $_POST['parent_id'];
            $options['name'] = $_POST['name'];
            $options['status'] = $_POST['status'];
            $options['sort'] = $_POST['sort'];
            if(isset($_POST['last'])) {
                $options['last'] = $_POST['last'];
            } else {
                $options['last'] = 0;
            }


            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поле Название';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Category::createCategory($options);

                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/category_img/bg-category-{$id}.jpg");
                    }
                }

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
        }

        // Обработка формы
        if (isset($_POST['create_banner'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['category_id'] = $_POST['category_id'];
            $options['status'] = $_POST['status'];
            $options['sort'] = $_POST['sort'];
            $options['text'] = $_POST['text'];


            // Флаг ошибок в форме
            $errors = false;
            /*
            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поле Название';            }
            */

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Banner::createBanner($options);

                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/slider/slider-{$id}.jpg");
                    }
                }

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
        }



        if(isset($_POST['update_category'])) {
            $options['name'] = $_POST['name'];
            $id = $_POST['category_id'];
            $options['status'] = $_POST['status'];
            $options['sort'] = $_POST['sort'];
            if(isset($_POST['last'])) {
                $options['last'] = $_POST['last'];
            } else {
                $options['last'] = 0;
            }


            $ok = Category::updateCategoryById($id, $options);

            // Если запись добавлена
            if ($ok) {
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/category_img/bg-category-{$id}.jpg");
                }
            }

            header("Location: " . $_SERVER['HTTP_REFERER']);

        }


        require_once(ROOT . '/views/admin_cabinet/admin_category/view.php');
        return true;

    }


    /**
     * Action для страницы "Удалить товар"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();


        // Если форма отправлена
        // Удаляем товар
        Category::deleteCategoryById($id);

        // Перенаправляем пользователя на страницу управлениями товарами
        header("Location: " . $_SERVER['HTTP_REFERER']);


        // Подключаем вид
        require_once(ROOT . '/views/admin_cabinet/admin_category/delete.php');
        return true;
    }

}