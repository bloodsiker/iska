<?php

namespace App\app\Controllers;

use App\app\Models\Activity;
use App\vendor\controller\Controller;

class ActivityController extends Controller
{

    public function actionNacPatriotic()
    {
        $title = ' - Діяльність національно-патріотична';

        $activity = Activity::getActivityById(1);


        require_once(ROOT . '/views/activity/national-patriotic.php');
        return true;
    }

    public function actionScientific()
    {
        $title = ' - Наукова діяльність';

        $activity = Activity::getActivityById(2);


        require_once(ROOT . '/views/activity/scientific.php');
        return true;
    }

}