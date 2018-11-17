<?php

namespace App\app\Controllers;

use App\app\Models\Activity;
use App\app\Models\Documents;
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

        $listDocuments = Documents::getListDocuments(Documents::TYPE_SCIENTIFIC);

        $this->render('activity/scientific_doc', compact('title', 'activity', 'listDocuments'));
        return true;
    }

}