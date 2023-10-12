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
 
$imgDefault_root = _WEB_ROOT . 'public/assets/img/';
define('_IMG_DEFAULT', $imgDefault_root);

$css_root = _WEB_ROOT . 'public/assets/css/';
define('_CSS_ROOT', $css_root);

$components_root = _WEB_ROOT . 'app/view/user/template/';
define('_COMPONENTS_ROOT', $components_root);

$vender_root = _WEB_ROOT . 'public/assets/vendor/';
define('_VENDER_ROOT', $vender_root);

$js_root = _WEB_ROOT . 'public/assets/js/';
define('_JS_ROOT', $js_root);



require_once 'configs/routers.php';
require_once 'core/MyPDO.php';
require_once 'app/App.php';
require_once 'core/Controller.php';