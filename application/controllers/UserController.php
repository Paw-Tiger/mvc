<?php

namespace application\controllers;

use application\Controller;

class UserController extends Controller{

    public function actionTest(){
        $this->getModel()->setTemplate('user/test');
        $this->getModel()->setData(['test1','test2']);
    }
    public function actionTest2(){
        $this->getModel()->setTemplate('user/test');
        $this->getModel()->setData(['test3','test4']);
    }
}