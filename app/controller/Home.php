<?php

class Home extends Controller
{
    private $model_home, $data = [];

    function index()
    {
        $this->model_home = $this->getModel('HomeModel');
        $this->data['content'] = 'user/home';
        $this->data['sub_content']['css'] = _WEB_ROOT . 'public/assets/css/home.css';
        $this->data['sub_content']['js'] = _WEB_ROOT . 'public/assets/js/home.js';
        $this->render('layout/client_layout', $this->data);
    }
}
