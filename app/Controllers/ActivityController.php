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

        $this->render('activity/national-patriotic', compact('title', 'activity'));
        return true;
    }

    public function actionScientific()
    {
        $title = ' - Наукова діяльність';

        $activity = Activity::getActivityById(2);

        $this->render('activity/scientific', compact('title', 'activity'));
        return true;
    }

}