<?php

class AdminModel extends MyPDO {
    function findAllCustomer() {
        $sql = "SELECT * FROM customer";
        $stmt = $this->pdo_query($sql);
        return $stmt;
    }

    function deleteListCustomer($listId) {
        $sql = "DELETE FROM customer WHERE id IN (" . implode(",", $listId) . ")";
        $stmt = $this->pdo_execute($sql);
        if($stmt->rowcount() > 0) {
            return true;
        }else {
            return false;
        };
    }
}