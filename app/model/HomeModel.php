<?php
class HomeModel
{
    function getList() {
        $data = $this->getData();
        return $data;        
    }

    function getData() {
        return [
            'san pham 1',
            'san pham 2',
            'san pham 3',
            'san pham 4',
            'san pham 5',
        ];
    }

    function findDataById($id) {
        $data = $this->getData();
        return $data[$id];
    }
}
