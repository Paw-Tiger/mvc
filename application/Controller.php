<?php

namespace application;

class Controller {

    public $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getModel(){
        return $this->model;
    }

}