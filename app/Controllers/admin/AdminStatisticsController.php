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

    public function actionAjaxChart()
    {
        self::checkAdmin();

        $visit = new VisitAnalytics();
        $statistics = $visit->getStatistics();

        $data = [];
        $i = 0;
        foreach ($statistics as $stat) {
            $data[$i]['y']     = $stat['dates'];
            $data[$i]['item1'] = $stat['uniq_visit'];
            $data[$i]['item2'] = $stat['views'];
            $i++;
        }

        $response = [
            'data' => $data,
            'xkey' => 'y',
            'ykeys' => ['item1', 'item2'],
            'labels' => ['Уникальных посетителей', 'Всего просмотров'],
        ];

        print_r(json_encode($response));
        return true;
    }

}