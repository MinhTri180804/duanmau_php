<?php

class Admin extends Controller
{
    private $model_admin, $data = [];
    function index()
    {
        $this->data['content'] = 'admin/home';
        $this->render('layout/admin_layout', $this->data);
    }

    function dataUser()
    {
        $this->model_admin = $this->getModel('AdminModel');
        $this->data['sub_content']['customers'] = $this->model_admin->findAllCustomer();
        $this->data['sub_content']['title'] = 'Data User';
        $this->data['content'] = 'admin/tableUser';
        $this->render('layout/admin_layout', $this->data);
    }

    function dataAdmin()
    {
        $this->model_admin = $this->getModel('AdminModel');
        $this->data['sub_content']['admins'] = $this->model_admin->findAllAdmin();
        $this->data['sub_content']['title'] = 'Data Admin';
        $this->data['content'] = 'admin/tableAdmin';
        $this->render('layout/admin_layout', $this->data);
    }

    function deleteUser()
    {
        if (isset($_GET['listId'])) {
            $listId = $_GET['listId'];
            $listId = explode('-', $listId);
            $this->model_admin = $this->getModel('AdminModel');
            $result = $this->model_admin->deleteListCustomer($listId);
            if($result) {
                $this->data['sub_content']['message'] = 'Xóa thành công';
                $this->data['sub_content']['code'] = 'SUCCESS';
                $this->data['sub_content']['sub'] = 'Bạn đã xóa thành công dữ liệu khách hàng';
            }else {
                $this->data['sub_content']['message'] = 'Xóa thất bại';
                $this->data['sub_content']['code'] = 'ERROR';
                $this->data['sub_content']['sub'] = 'Bạn đã xóa thất bại dữ liệu khách hàng';
            }
            $this->data['content'] = 'admin/message';
            $this->data['sub_content']['link_back'] = _WEB_ROOT . 'admin/dataUser';
            $this->render('layout/admin_layout', $this->data);
        }
    }
}
