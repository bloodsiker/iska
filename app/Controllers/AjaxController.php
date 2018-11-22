<?php

namespace App\app\Controllers;

use App\app\Models\Documents;
use App\vendor\controller\Controller;
use Josantonius\Request\Request;

class AjaxController extends Controller
{

    public function actionIncViewDocument()
    {
        if (Request::isAjax()) {
            $id = Request::post('id');
            Documents::incViewsById($id);
        }
        return true;
    }
}