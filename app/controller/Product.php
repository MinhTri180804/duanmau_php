<?php

class Product extends Controller{
    private $data=[];
    function index() {
        $this->data['content'] = 'user/product';
        $this->data['sub_content']['css'] = _WEB_ROOT . 'public/assets/css/product.css';
        $this->data['sub_content']['js'] = _WEB_ROOT . 'public/js/product.js';
        $this->render('layout/client_layout', $this->data);
    }
}