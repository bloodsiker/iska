<?php

namespace App\app\Controllers;

use App\app\Models\About;
use App\app\Models\Banner;
use App\app\Models\News;
use App\vendor\controller\Controller;

/**
 * Class SiteController
 */
class SiteController extends Controller
{

    public function actionIndex()
    {
        $title = '';

        $listNews = News::getLastNewsIndex();

        $listBanners = Banner::getBannersList();

        $congratulation = About::getHistory(2);

        $this->render('site/index', compact('title','listNews',
            'listBanners', 'congratulation'));
    }


    public function actionContact()
    {
        $title = '- Контакти';

        $this->render('site/contact', compact('title'));
    }


    public function actionHistory()
    {
        $title = '- Історія розвитку';

        $history = About::getHistory(1);

        $this->render('site/history', compact('title', 'history'));
    }

}
