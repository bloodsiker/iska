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

        $achievementCategory = Achievement::getCategoryList();

        $this->render('achievement/international', compact('title', 'achievement', 'achievementCategory'));
        return true;
    }

    public function actionPersonal()
    {
        $title = ' - Особисті досягнення';

        $activity = Activity::getActivityById(2);

        $this->render('achievement/personal', compact('title', 'activity'));
        return true;
    }

}