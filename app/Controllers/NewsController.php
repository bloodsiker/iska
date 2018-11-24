<?php

namespace App\app\Controllers;

use App\app\Models\News;
use App\components\Pagination;
use App\vendor\controller\Controller;

/**
 * Class NewsController
 */
class NewsController extends Controller
{

    /**
     * @param $category
     * @param int $page
     *
     * @return bool
     */
    public function actionList($category, $page = 1)
    {
        if ($category === 'ukrainian') {
            $meta['title'] = '- Новини всеукраїнські';
            $bookmark = 'всеукраїнські новини';
        } elseif ($category === 'iska-pro') {
            $meta['title'] = '- Новини ISKA PRO';
            $bookmark = 'ISKA PRO';
        } elseif ($category === 'international') {
            $meta['title'] = '- Новини регіональні';
            $bookmark = 'МІЖНАРОДНІ новини';
        }

        $newsList = News::getNewsListSite($category, $page);

        $totalCount = News::getCountNewsByCategory($category);

        $pagination = new Pagination($totalCount, $page, News::SHOW_BY_DEFAULT);

        $this->render('news/index', compact('meta', 'pagination', 'bookmark', 'newsList'));
        return true;
    }

    public function actionView($category, $slug)
    {
        $explode = explode('-', $slug);
        $id = reset($explode);
        $news = News::getNewsById($id);

        $title = "Новини - " . $news['title'];

        $photoByNews = News::getImgNewsList($id);

        if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], '/admin/') === false) {
            News::incViewsById($id);
        }

        $this->render('news/view', compact('title', 'news', 'photoByNews'));
        return true;
    }
}