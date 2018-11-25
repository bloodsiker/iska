<?php

namespace App\app\Controllers;

use App\app\Models\News;
use App\app\Models\NewsCategory;
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
        $newsCategory = NewsCategory::getCategoryBy('slug', $category);

        $meta['title'] = '- Новини '.$newsCategory['name'];

        $newsList = News::getNewsListSite($newsCategory['id'], $page);

        $totalCount = News::getCountNewsByCategory($newsCategory['id']);

        $pagination = new Pagination($totalCount, $page, News::SHOW_BY_DEFAULT);

        $this->render('news/index', compact('meta', 'newsCategory', 'pagination', 'newsList'));
        return true;
    }

    public function actionView($category, $slug)
    {
        $explode = explode('-', $slug);
        $id = reset($explode);
        $news = News::getNewsById($id);

        $title = $news['title'];

        $photoByNews = News::getImgNewsList($id);

        if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], '/admin/') === false) {
            News::incViewsById($id);
        }

        $this->render('news/view', compact('title', 'news', 'photoByNews'));
        return true;
    }
}