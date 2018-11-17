<?php

namespace App\app\Controllers\admin;

use App\app\Models\About;
use App\app\Models\Documents;
use App\app\Models\Federation;
use App\app\Models\Representative;
use App\components\AdminBase;
use Josantonius\Request\Request;
use Josantonius\Url\Url;
use upload as FileUpload;

class AdminFederationController extends AdminBase
{
    const PATH_UPLOAD = "/upload/docs/federation/";

    public function actionLeadership()
    {
        self::checkAdmin();

        $federation = Federation::getActivityById(1);

        if (isset($_POST['update'])) {
            $text = $_POST['text'];
            Federation::updateActivityById(1, $text);
            Url::previous();
        }

        $this->render('admin_cabinet/admin_federation/leadership', compact('federation'));
        return true;
    }


    /**
     * Action для страницы "Редактировать новость"
     */
    public function actionCalendar()
    {
        self::checkAdmin();

        $federation = Federation::getActivityById(2);

        if (isset($_POST['update'])) {
            $text = $_POST['text'];
            Federation::updateActivityById(2, $text);
            Url::previous();
        }

        $this->render('admin_cabinet/admin_federation/calendar', compact('federation'));
        return true;
    }

    /**
     * Action для страницы "Редактировать новость"
     */
    public function actionRules()
    {
        self::checkAdmin();

        $federation = Federation::getActivityById(3);

        if (isset($_POST['update'])) {
            $text = $_POST['text'];
            Federation::updateActivityById(3, $text);
            Url::previous();
        }

        $this->render('admin_cabinet/admin_federation/rules', compact('federation'));
        return true;
    }

    public function actionPosition()
    {
        self::checkAdmin();

        $listPosition = Documents::getListDocuments(Documents::TYPE_POSITION);

        if(Request::post('add_position')){
            $options['type_doc'] = Documents::TYPE_POSITION;
            $options['title'] = $_POST['title'];
            $options['path'] = self::PATH_UPLOAD;

            if (Request::files('file')) {
                $handle = new FileUpload(Request::files('file'));
                if ($handle->uploaded) {
//                    $handle->allowed = array('image/jpeg','image/jpg','image/png');
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

        $this->render('admin_cabinet/admin_federation/position', compact('listPosition'));
        return true;
    }

    public function actionAjaxPosition()
    {
        self::checkAdmin();

        if($_REQUEST['action'] == 'position'){
            $id_pos = $_REQUEST['position_id'];
            $result = Documents::getDocumentById($id_pos);
            print_r($result['title']);
        }

        return true;
    }

    public function actionDeletePosition($id)
    {
        self::checkAdmin();
        Documents::deleteDocumentById($id);
        Url::previous();

        return true;
    }

    public function actionListRegions()
    {
        self::checkAdmin();

        $regions = Representative::getAllRegions();

        if (isset($_POST['update'])) {
            $text = $_POST['text'];
            $title = $_POST['title'];

            About::updateCongratulation(2, $text, $title);
            Url::previous();
        }

        $this->render('admin_cabinet/admin_federation/representative/regions', compact('regions'));
        return true;
    }

    public function actionClubsInRegion($id)
    {
        self::checkAdmin();

        $region = Representative::getInfoRegion($id);
        $regionClubs = Representative::getRegionClubs($id);
        $regionEmails = Representative::getEmailsRegionClubs($id);
        $regionPhones = Representative::getPhonesRegionClubs($id);

        if (isset($_POST['add_club'])) {
            $city = $_POST['city'];
            $club = $_POST['club'];

            Representative::createClub($id, $city, $club);
            Url::previous();
        }

        if (isset($_POST['add_email'])) {
            $email = $_POST['email'];

            Representative::createEmailClub($id, $email);
            Url::previous();
        }

        if (isset($_POST['edit_representative'])) {
            $representative = $_POST['representative'];

            Representative::updateRepresentativeById($id, $representative);
            Url::previous();
        }

        if (isset($_POST['add_phone'])) {
            $phone = $_POST['phone'];

            Representative::createPhoneClub($id, $phone);
            Url::previous();
        }

        if (isset($_POST['delete_club']) && $_POST['delete_club'] === 'true') {
            $id = $_POST['id'];

            Representative::deleteClubById($id);
            Url::previous();
        }

        if (isset($_POST['delete_email']) && $_POST['delete_email'] === 'true') {
            $id = $_POST['id'];

            Representative::deleteEmailById($id);
            Url::previous();
        }

        if (isset($_POST['delete_phone']) && $_POST['delete_phone'] === 'true') {
            $id = $_POST['id'];

            Representative::deletePhoneById($id);
            Url::previous();
        }

        $this->render('admin_cabinet/admin_federation/representative/region_clubs',
            compact('region', 'regionClubs', 'regionEmails', 'regionPhones'));
        return true;
    }
}