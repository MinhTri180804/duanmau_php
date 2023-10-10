<?php
$_DIR_ = str_replace('\\', '/', __DIR__);
define('_DIR_ROOT', $_DIR_);

if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'on'){
    $web_root = 'https://' . $_SERVER['HTTP_HOST'];
}else {
    $web_root = 'http://' . $_SERVER['HTTP_HOST'];
}

$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower($_DIR_));
$web_root .= $folder . '/';

define('_WEB_ROOT', $web_root);

require_once 'configs/routers.php';
require_once 'app/App.php';
require_once 'core/Controller.php';