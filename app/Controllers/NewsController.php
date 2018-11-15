<?php

namespace App\app\Controllers;

use App\app\Models\News;
use App\vendor\controller\Controller;

/**
 * Class NewsController
 */
class NewsController extends Controller
{

    public function actionUkrainian()
    {
        $title = '- Новини всеукраїнські';
        $bookmark = 'всеукраїнські новини';

        $newsList = News::getNewsListSite('ukrainian');

        $this->render('news/index', compact('title', 'bookmark', 'newsList'));
        return true;
    }

    public function actionIskaPro()
    {
        $title = '- Новини ISKA PRO';
        $bookmark = 'ISKA PRO';

        $newsList = News::getNewsListSite('iska-pro');

        $this->render('news/index', compact('title', 'bookmark', 'newsList'));
        return true;
    }

    public function actionInternational()
    {
        $title = '- Новини регіональні';
        $bookmark = 'МІЖНАРОДНІ новини';

        $newsList = News::getNewsListSite('international');

        $this->render('news/index', compact('title', 'bookmark', 'newsList'));
        return true;
    }


    public function actionView($category = true, $id)
    {
        $news = News::getNewsById($id);

        $title = "Новини - " . $news['title'];

        $fotoByNews = News::getImgNewsList($id);

        $this->render('news/view', compact('title', 'news', 'fotoByNews'));
        return true;
    }

}