<?php

namespace App\app\Controllers\admin;

use App\app\Models\Banner;
use App\components\AdminBase;
use Josantonius\Url\Url;

class AdminBannerController extends AdminBase
{


    /**
     * Action для страницы "Редактировать banner"
     */
    public function actionUpdate($id)
    {
        self::checkAdmin();

        $banner = Banner::getBannerById($id);

        if (isset($_POST['update'])) {
            $options['link'] = $_POST['link'];
            $options['text'] = $_POST['text'];
            $options['status'] = $_POST['status'];
            $options['sort'] = $_POST['sort'];

            if (Banner::updateBannerById($id, $options)) {

                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                    $name = $_FILES['image']['name'];
                    $path = "/upload/slider/";
                    $randomName = substr_replace(sha1(microtime(true)), '', 12);

                    $getMime = explode('.', $name);
                    //$mime = end($getMime);

                    $randomName =  $randomName . "." . $getMime['1'];
                    $imgName = $randomName;

                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . $path . $imgName)){
                        Banner::updateBannerImagesById($id, $path, $imgName );
                    }
                }
            }

            Url::redirect('/admin');
        }

        require_once(ROOT . '/views/admin_cabinet/admin_banner/update.php');
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();

        Banner::deleteBannerById($id);

        Url::redirect('/admin/index');
        return true;
    }


}