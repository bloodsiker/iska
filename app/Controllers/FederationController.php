<?php

namespace App\app\Controllers;

use App\app\Models\Documents;
use App\app\Models\Federation;
use App\app\Models\Representative;
use App\vendor\controller\Controller;

class FederationController extends Controller
{

    public function actionLeadership()
    {
        $title = ' - Керівництво';

        $federation = Federation::getActivityById(1);

        $this->render('federation/leadership', compact('title', 'federation'));
        return true;
    }


    public function actionRepresentative()
    {
        $meta['title'] = '- Представники в регіонах';
        $regions = Representative::getAllRegions();

        $regions = array_map(function ($value) {
            $value['clubs'] = Representative::getRegionClubs($value['id']);
            $value['phones'] = Representative::getPhonesRegionClubs($value['id']);
            $value['emails'] = Representative::getEmailsRegionClubs($value['id']);
            return $value;
        }, $regions);

        $this->render('federation/representative', compact('meta', 'regions'));
        return true;
    }

    public function actionCalendar()
    {
        $title = ' - Календарний план ISKA на 2016';

        $federation = Federation::getActivityById(2);

        $this->render('federation/calendar_2016', compact('title', 'federation'));
        return true;
    }

    public function actionRules()
    {
        $title = ' - Правила змагань';

        $federation = Federation::getActivityById(3);

        $this->render('federation/rules', compact('title', 'federation'));
        return true;
    }

    public function actionPosition()
    {
        $meta['title'] = '- ПОЛОЖЕННЯ ПРО ПРОВЕДЕННЯ ЧЕМПІОНАТУ УКРАЇНИ З КІКБОКСИНГУ ISKA';

        $federation = Federation::getActivityById(4);
        $listPosition = Documents::getListDocuments(Documents::TYPE_POSITION);

        $this->render('federation/position', compact('meta', 'federation', 'listPosition'));
        return true;
    }

}