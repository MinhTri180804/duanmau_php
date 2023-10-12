<?php 

class ProductsModel extends MyPDO {
    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        return $this->pdo_query($sql);
    }
}