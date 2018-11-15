<?php

namespace App\app\Controllers;

use App\app\Models\Achievement;
use App\app\Models\Activity;
use App\vendor\controller\Controller;

class AchievementController extends Controller
{

    public function actionInternational($category)
    {
        $title = ' - Міжнародні досягнення';

        $achievement = Achievement::getAchievementByAlias($category);

        $categoryList = Achievement::getCategoryList();


        require_once(ROOT . '/views/achievement/international.php');
        return true;
    }

    public function actionPersonal()
    {
        $title = ' - Особисті досягнення';

        $activity = Activity::getActivityById(2);


        require_once(ROOT . '/views/achievement/personal.php');
        return true;
    }

}