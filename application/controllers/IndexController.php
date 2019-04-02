<?php

namespace application\controllers;

use application\Controller;

class IndexController extends Controller
{

    public function actionIndex()
    {
        $this->getModel()->setTemplate('index/index');
        $this->getModel()->setData('This index controller');
    }

}
