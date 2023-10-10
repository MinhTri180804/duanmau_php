<?php
class Controller
{
    public function getModel($model)
    {
        if (file_exists('app/model/' . $model . '.php')) {
            require_once 'app/model/' . $model . '.php';
            $model = new $model();
            return $model;
        }

        return [
            'error' => 'Model not found',
            'status' => '404'
        ];
    }

    public function render($view, $data = [])
    {
        extract($data);
        if (file_exists('app/view/' . $view . '.php')) {
            require_once 'app/view/' . $view . '.php';
        } else {
            echo 'View not found';
        }
    }
}
