<?php

namespace App\app\Controllers\admin;

use App\app\Models\Activity;
use App\app\Models\Documents;
use App\components\AdminBase;
use Cocur\Slugify\Slugify;
use Josantonius\Request\Request;
use Josantonius\Url\Url;
use upload as FileUpload;

class AdminActivityController extends AdminBase
{
    const PATH_UPLOAD = "/upload/docs/activity/";

    public function actionPatriotic()
    {
        self::checkAdmin();

        $activity = Activity::getActivityById(1);

        if (isset($_POST['update'])) {
            $text = $_POST['text'];

            Activity::updateActivityById(1, $text);
            Url::previous();
        }

        $this->render('admin_cabinet/admin_activity/national_patriotic', compact('activity'));
        return true;

    }

    /**
     * Action для страницы "Редактировать новость"
     */
    public function actionScientific1()
    {
        self::checkAdmin();

        $activity = Activity::getActivityById(2);

        if (isset($_POST['update'])) {
            $text = $_POST['text'];

            Activity::updateActivityById(2, $text);
            Url::previous();
        }

        $this->render('admin_cabinet/admin_activity/scientific', compact('activity'));
        return true;
    }

    public function actionScientific()
    {
        self::checkAdmin();

        $listDoc = Documents::getListDocuments(Documents::TYPE_SCIENTIFIC);

        if(Request::post('add_document')){
            $slug = new Slugify();
            $options['type_doc'] = Documents::TYPE_SCIENTIFIC;
            $options['title'] = $slug->slugify(Request::post('title'));
            $options['path'] = self::PATH_UPLOAD;

            if (Request::files('file')) {
                $handle = new FileUpload(Request::files('file'));
                if ($handle->uploaded) {
                    $handle->file_new_name_body = substr_replace(sha1(microtime(true)), '', 12);
                    $options['file'] = $handle->file_new_name_body . '.' . $handle->file_src_name_ext;
                    $handle->process(ROOT . self::PATH_UPLOAD);
                    if ($handle->processed) {
                        $handle->clean();
                    }
                }
            }

            if (Documents::createDocument($options)) {
                Url::previous();
            }
        }

        if(Request::post('update_position')){
            $id = $_POST['id_position'];
            $title = $_POST['title'];

            Documents::updateDocumentById($id, $title);
            Url::previous();
        }

        $this->render('admin_cabinet/admin_activity/scientific_doc', compact('listDoc'));
        return true;
    }


}