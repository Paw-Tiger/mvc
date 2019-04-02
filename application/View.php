<?php

namespace application;

use \Exception;

class View{
    public $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function getModel(){
        return $this->model;
    }

    public $pathTemplate = __DIR__.'/views';

    public $pathLayout = __DIR__.'/views/layout';


    public function render(){

        $view =  sprintf('%s/%s.php',$this->pathTemplate,$this->getModel()->getTemplate());
        $layout =  sprintf('%s/%s.php',$this->pathLayout,$this->getModel()->getLayout());

        if(!file_exists($view)){
            throw  new Exception('View not exist');
        }elseif (!file_exists($layout)){
            throw  new Exception('Layout not exist');
        }

        require_once($view);
        require_once($layout);

    }

}