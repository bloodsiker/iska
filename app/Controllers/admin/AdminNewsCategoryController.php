<?php

namespace App\app\Controllers\admin;

use App\app\Models\News;
use App\app\Models\NewsCategory;
use App\components\AdminBase;
use Cocur\Slugify\Slugify;
use Josantonius\Request\Request;
use Josantonius\Url\Url;

class AdminNewsCategoryController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();

        $categoryList = NewsCategory::getCategoryListAdmin();

        if (Request::post('create')) {
            $slugify = new Slugify();
            $options['name'] = Request::post('name');
            $options['slug'] = $slugify->slugify($options['name']);
            $options['title'] = Request::post('title');
            $options['sort'] = Request::post('sort');
            $options['is_active'] = Request::post('is_active');

            NewsCategory::createCategory($options);
            Url::previous();
        }

        $this->render('admin_cabinet/admin_news_category/index', compact('categoryList'));
        return true;
    }


    /**
     * @param $id
     *
     * @return bool
     */
    public function actionUpdate($id)
    {
        self::checkAdmin();

        $category = NewsCategory::getCategoryBy('id', $id);

        if (Request::post('update')) {
            $options['name'] = Request::post('name');
            $options['title'] = Request::post('title');
            $options['sort'] = Request::post('sort');
            $options['is_active'] = Request::post('is_active');

            NewsCategory::updateCategoryById($id, $options);
            Url::redirect('/admin/news/category');
        }

        $this->render('admin_cabinet/admin_news_category/update', compact('category'));
        return true;
    }
}