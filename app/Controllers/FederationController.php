<?php

namespace App\app\Controllers;

use App\app\Models\Federation;
use App\app\Models\Representative;
use App\vendor\controller\Controller;

class FederationController extends Controller
{

    public function actionLeadership()
    {
        $title = ' - Керівництво';

        $federation = Federation::getActivityById(1);

        require_once(ROOT . '/views/federation/leadership.php');
        return true;
    }


    public function actionRepresentative()
    {
        $title = ' - Представники в регіонах';
        $regions = Representative::getAllRegions();

        $regions = array_map(function ($value) {
            $value['clubs'] = Representative::getRegionClubs($value['id']);
            $value['phones'] = Representative::getPhonesRegionClubs($value['id']);
            $value['emails'] = Representative::getEmailsRegionClubs($value['id']);
            return $value;
        }, $regions);

        require_once(ROOT . '/views/federation/representative.php');
        return true;
    }

    public function actionCalendar()
    {
        $title = ' - Календарний план ISKA на 2016';

        $federation = Federation::getActivityById(2);

        require_once(ROOT . '/views/federation/calendar_2016.php');
        return true;
    }


    public function actionRules()
    {
        $title = ' - Правила змагань';

        $federation = Federation::getActivityById(3);

        require_once(ROOT . '/views/federation/rules.php');
        return true;
    }


    public function actionPosition()
    {
        $title = ' - ПОЛОЖЕННЯ ПРО ПРОВЕДЕННЯ ЧЕМПІОНАТУ УКРАЇНИ З КІКБОКСИНГУ ISKA';

        $federation = Federation::getActivityById(4);

        $listPosition = Federation::getListPosition();

        require_once(ROOT . '/views/federation/position.php');
        return true;
    }

}