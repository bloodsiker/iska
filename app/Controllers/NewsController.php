<?php

namespace App\app\Controllers;

use App\app\Models\News;
use App\vendor\controller\Controller;
use Josantonius\Request\Request;

/**
 * Class NewsController
 */
class NewsController extends Controller
{

    public function actionUkrainian()
    {
        $meta['title'] = '- Новини всеукраїнські';
        $bookmark = 'всеукраїнські новини';

        $newsList = News::getNewsListSite('ukrainian');

        $this->render('news/index', compact('meta', 'bookmark', 'newsList'));
        return true;
    }

    public function actionIskaPro()
    {
        $meta['title'] = '- Новини ISKA PRO';
        $bookmark = 'ISKA PRO';

        $newsList = News::getNewsListSite('iska-pro');

        $this->render('news/index', compact('meta', 'bookmark', 'newsList'));
        return true;
    }

    public function actionInternational()
    {
        $meta['title'] = '- Новини регіональні';
        $bookmark = 'МІЖНАРОДНІ новини';

        $newsList = News::getNewsListSite('international');

        $this->render('news/index', compact('meta', 'bookmark', 'newsList'));
        return true;
    }


    public function actionView($category = true, $id)
    {
        $news = News::getNewsById($id);

        $title = "Новини - " . $news['title'];

        $photoByNews = News::getImgNewsList($id);

        if (strpos($_SERVER['HTTP_REFERER'], '/admin/') === false) {
            News::incViewsById($id);
        }

        $this->render('news/view', compact('title', 'news', 'photoByNews'));
        return true;
    }

}