<?php

namespace App\app\Controllers\admin;

use App\app\Models\Activity;
use App\app\Models\Documents;
use App\app\Services\VisitAnalytics;
use App\components\AdminBase;
use Josantonius\Request\Request;
use Josantonius\Url\Url;
use upload as FileUpload;

class AdminStatisticsController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();

        $visit = new VisitAnalytics();
        $statistics = $visit->getStatistics();

        $this->render('admin_cabinet/admin_statistics/index', compact('statistics'));
        return true;

    }

}