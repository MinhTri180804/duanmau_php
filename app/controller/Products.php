<?php
class Products extends Controller{
    private $model_products, $data = [];

    public function index() {
        $this->model_products = $this->getModel('ProductsModel');
        $this->data['sub_content']['products'] = $this->model_products->getAllProducts();
        $this->data['content'] = 'user/products';
        $this->data['sub_content']['css'] = _WEB_ROOT . 'public/assets/css/products.css';
        $this->render('layout/client_layout', $this->data);
    }
}