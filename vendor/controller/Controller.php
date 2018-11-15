<?php

namespace App\vendor\controller;

use App\vendor\view\View;

/**
 * Class Controller
 */
class Controller
{
    /**
     * @var View
     */
    public $view;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }


    /**
     * @param string $template
     * @param array  $params
     */
    public function render($template, $params = array())
    {
        return $this->view->render($template, $params);
    }
}