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
        $meta['description'] = 'Аматорський та професійний кікбоксинг. Збірна команда України. Міжнародні та всеукраїнські чемпіонати. Каледнар. Клуби. Новини.';
        $meta['keywords'] = 'кікбоксинг, федерація кікбоксингу, федерація кікбоксингу ISKA, ISKA, ИСКА';

        $listNews = News::getLastNewsIndex();
        $listBanners = Banner::getBannersList();
        $congratulation = About::getHistory(2);

        $this->render('site/index', compact('meta','listNews', 'listBanners', 'congratulation'));
        return true;
    }

    public function actionContact()
    {
        $meta['description'] = '- Контакти';

        $this->render('site/contact', compact('meta'));
        return true;
    }

    public function actionHistory()
    {
        $meta['description'] = '- Історія розвитку';

        $history = About::getHistory(1);

        $this->render('site/history', compact('meta', 'history'));
        return true;
    }
}
