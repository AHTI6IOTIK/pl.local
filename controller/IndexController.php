<?php

class IndexController extends BaseController
{

    public $view = 'index';
    public $title;

    function __construct()
    {
        parent::__construct();
        $this->title .= ' | Главная';
        $this->keywords = 'Наш интернет магазин';
        $this->description = 'Описание магазина';
    }


}