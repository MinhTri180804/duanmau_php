<?php

class Product extends Controller{
    private $model_product, $data = [];
    function detail($id) {
        $this->model_product = $this->getModel('ProductModel');
        $this->data['sub_content']['product'] = $this->model_product->findById($id);
        $this->data['sub_content']['css'] = _WEB_ROOT . 'public/assets/css/product_detail.css';
        $this->data['sub_content']['js'] = _WEB_ROOT . 'public/assets/js/product_detail.js';
        $this->data['content'] = 'user/product_detail';
        $this->render('layout/client_layout', $this->data);
    }
}