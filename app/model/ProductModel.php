<?php

class ProductModel extends MyPDO {
    function findById($id) {
        $sql = "SELECT * FROM products WHERE id = $id";
        return $this->pdo_query_one($sql);
    }
}