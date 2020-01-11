<?php

namespace App\app\Controllers\admin;

use App\app\Models\Achievement;
use App\components\AdminBase;
use Josantonius\Url\Url;

class AdminAchievementController extends AdminBase
{

    public function actionInternational()
    {
        self::checkAdmin();

        $categoryList = Achievement::getCategoryList();

        if (isset($_POST['add_category'])) {
            $category = $_POST['category'];
            $name = $_POST['name'];
            $alias = $_POST['alias'];

            $id = Achievement::createCategory($category, $name, $alias);

            Url::redirect('/admin/achievement/international/'.$id);
        }

        $this->render('admin_cabinet/admin_achievement/international', compact('categoryList'));
        return true;
    }

    /**
     * @param $id
     *
     * @return bool
     */
    public function actionInternationalView($id)
    {
        self::checkAdmin();

        $achievement = Achievement::getAchievementById($id);
        $categoryList = Achievement::getCategoryList();

        if (isset($_POST['add_category'])) {
            $category = $_POST['category'];
            $name = $_POST['name'];
            $alias = $_POST['alias'];

            $id = Achievement::createCategory($category, $name, $alias);

            Url::redirect('/admin/achievement/international/'.$id);
        }


        if (isset($_POST['update'])) {
            $title = $_POST['title'];
            $text = $_POST['text'];

            Achievement::updateAchievementById($id, $title, $text);
            Url::previous();
        }

        $this->render('admin_cabinet/admin_achievement/intern_view', compact('achievement', 'categoryList'));
        return true;
    }


    /**
     * @param $id
     * @return bool
     */
    public function actionCategoryDelete($id)
    {
        self::checkAdmin();

        $ok = Achievement::deleteCategoryById($id);
        if($ok){
            Url::redirect('/admin/achievement/international');
        }
        return true;
    }


    public function actionPersonal()
    {
        self::checkAdmin();

        $achievement = Achievement::getAchievementById(2);

        if (isset($_POST['update'])) {
            $title =  null;
            $text = $_POST['text'];

            Achievement::updateAchievementById(2, $title, $text);
            Url::previous();
        }

        $this->render('admin_cabinet/admin_achievement/personal', compact('achievement'));
        return true;
    }


}