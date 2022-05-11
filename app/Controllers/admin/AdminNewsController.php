<?php

namespace App\app\Controllers\admin;

use App\app\Models\News;
use App\app\Models\NewsCategory;
use App\components\AdminBase;
use Cocur\Slugify\Slugify;
use Josantonius\Request\Request;
use Josantonius\Url\Url;
use Verot\Upload\Upload;

class AdminNewsController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();

        $newsList = News::getNewsListAdmin();
        $categoryList = NewsCategory::getCategoryListSite();

        if (Request::post('create')) {
            $slugify = new Slugify();
            $options['category_id'] = Request::post('category_id');
            $options['title'] = Request::post('title');
            $options['slug'] = $slugify->slugify($options['title']);
            $options['description'] = Request::post('description');
            $options['text'] = Request::post('text');
            $options['status'] = Request::post('status');
            $options['data_create'] = Request::post('data_create');

            $id = News::createNews($options);

            if ($id && Request::files('image')) {
                $handle = new Upload(Request::files('image'));
                if ($handle->uploaded) {
                    $handle->allowed = ['image/jpeg','image/jpg','image/png'];
                    $handle->file_new_name_body = substr_replace(sha1(microtime(true)), '', 12);
                    $path = "/upload/news/" . $options['category'] . "/";
                    $imgName = $handle->file_new_name_body . '.' . $handle->file_src_name_ext;
                    $handle->process(ROOT . $path);
                    if ($handle->processed) {
                        $handle->clean();
                        News::updateNewsImagesById($id, $path, $imgName );
                    }
                }
            }
            Url::redirect('/admin/news');
        }

        $this->render('admin_cabinet/admin_news/index', compact('newsList', 'categoryList'));
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

        $news = News::getNewsById($id);
        $imgListNews = News::getImgNewsList($id);
        $categoryList = NewsCategory::getCategoryListSite();

        if (Request::post('update')) {
            $options['category_id'] = Request::post('category_id');
            $options['title'] = Request::post('title');
            $options['description'] = Request::post('description');
            $options['text'] = Request::post('text');
            $options['status'] = Request::post('status');
            $options['data_create'] = Request::post('data_create');

            if (News::updateNewsById($id, $options) && Request::files('image')) {
                $handle = new Upload(Request::files('image'));
                if ($handle->uploaded) {
                    $handle->allowed = ['image/jpeg','image/jpg','image/png'];
                    $handle->file_new_name_body = substr_replace(sha1(microtime(true)), '', 12);
                    $handle->image_resize       = true;
                    $handle->image_x            = 650;
                    $handle->image_ratio_y      = true;
                    $path = "/upload/news/" . $options['category'] . "/";
                    $imgName = $handle->file_new_name_body . '.' . $handle->file_src_name_ext;
                    $handle->process(ROOT . $path);
                    if ($handle->processed) {
                        $handle->clean();
                        News::updateNewsImagesById($id, $path, $imgName );
                    }
                }
            }

            Url::redirect('/admin/news');
        }

        if (Request::post('add_img')) {
            $handle = new Upload(Request::files('image'));
            if ($handle->uploaded) {
                $handle->allowed = ['image/jpeg','image/jpg','image/png'];
                $handle->file_new_name_body = substr_replace(sha1(microtime(true)), '', 12);
                $handle->image_resize       = true;
                $handle->image_x            = 650;
                $handle->image_ratio_y      = true;
                $path = "/upload/news/images/";
                $imgName = $handle->file_new_name_body . '.' . $handle->file_src_name_ext;
                $handle->process(ROOT . $path);
                if ($handle->processed) {
                    $handle->clean();
                    News::createImgNews($id, $path, $imgName);
                }
            }
            Url::previous();
        }

        $this->render('admin_cabinet/admin_news/update', compact('news', 'imgListNews', 'categoryList'));
        return true;
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function actionDeleteImgByNews($id)
    {
        self::checkAdmin();

        $imgInfo = News::getImgById($id);
        $ok = News::deletfile($imgInfo['path'],$imgInfo['img']);

        if($ok){
            News::deleteFileById($id);
        }
        Url::previous();
        return true;
    }


    /**
     * @param int $id
     *
     * @return bool
     */
    public function actionDelete($id)
    {
        self::checkAdmin();

        $news = News::getNewsById($id);

        if (Request::post('delete')) {
            News::deleteNewsById($id);
            Url::redirect('/admin/news');
        }

        $this->render('admin_cabinet/admin_news/delete', compact('news'));
        return true;
    }

}