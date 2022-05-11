<?php

namespace App\app\Controllers\admin;

use App\app\Models\Leadership;
use App\components\AdminBase;
use Josantonius\Request\Request;
use Josantonius\Url\Url;
use Verot\Upload\Upload;

class AdminLeadershipController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();

        $list = Leadership::getAll();

        if (Request::post('create')) {
            $options['name'] = Request::post('name');
            $options['position'] = Request::post('position');
            $options['status'] = Request::post('status');

            if (Request::files('image')) {
                $handle = new Upload(Request::files('image'));
                if ($handle->uploaded) {
                    $handle->allowed = ['image/jpeg','image/jpg','image/png'];
                    $handle->file_new_name_body = substr_replace(sha1(microtime(true)), '', 12);
                    $handle->image_resize       = true;
                    $handle->image_x            = 500;
                    $handle->image_ratio_y      = true;
                    $path = "/upload/leadership/";
                    $imgName = $handle->file_new_name_body . '.' . $handle->file_src_name_ext;
                    $handle->process(ROOT . $path);
                    if ($handle->processed) {
                        $handle->clean();
                        $options['photo'] = $path . $imgName;
                    }
                }
            }

            Leadership::create($options);

            Url::redirect('/admin/federation/leadership');
        }

        $this->render('admin_cabinet/leadership/index', compact('list'));
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdmin();

        $item = Leadership::getById($id);

        if (Request::post('update')) {
            $options['name'] = Request::post('name');
            $options['position'] = Request::post('position');
            $options['status'] = Request::post('status');
            $options['photo'] = $item['photo'];

            if (Request::files('image')) {
                $handle = new Upload(Request::files('image'));
                if ($handle->uploaded) {
                    $handle->allowed = ['image/jpeg','image/jpg','image/png'];
                    $handle->file_new_name_body = substr_replace(sha1(microtime(true)), '', 12);
                    $handle->image_resize       = true;
                    $handle->image_x            = 500;
                    $handle->image_ratio_y      = true;
                    $path = "/upload/leadership/";
                    $imgName = $handle->file_new_name_body . '.' . $handle->file_src_name_ext;
                    $handle->process(ROOT . $path);
                    if ($handle->processed) {
                        $handle->clean();
                        $options['photo'] = $path . $imgName;
                    }
                }
            }

            Leadership::updateById($id, $options);

            Url::redirect('/admin/federation/leadership');
        }

        $this->render('admin_cabinet/leadership/update', compact('item'));
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();

        $item = Leadership::getById($id);

        if (Request::post('delete')) {
            Leadership::deleteById($id);
            Url::redirect('/admin/federation/leadership');
        }

        $this->render('admin_cabinet/leadership/delete', compact('item'));
        return true;
    }
}