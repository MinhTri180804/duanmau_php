<?php

class App
{
    private $__controller, $__action = 'index', $__params;

    function __construct()
    {
        global $routers;
        $this->__controller = $routers['controller_default'];
        $this->__action = 'index';
        $this->__params = [];
        $this->handleUrl();
    }

    function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }

        return $url;
    }

    function handleUrl()
    {
        $url = $this->getUrl();
        $urlArray = explode('/', $url);
        $urlArray = array_values(array_filter($urlArray));

        // handle controller
        if (!empty($urlArray[0])) {
            $this->__controller = ucfirst($urlArray[0]);
        } else {
            $this->__controller = ucfirst($this->__controller);
        }

        if (file_exists('app/controller/' . ($this->__controller) . '.php')) {
            require_once 'controller/' . ($this->__controller) . '.php';
            if(class_exists($this->__controller)) {
                $this->__controller = new $this->__controller();
                unset($urlArray[0]);
            }else {
                $this->renderError('404');
            }
            // handle action

            if (!empty($urlArray[1])) {
                $this->__action = $urlArray[1];
                unset($urlArray[1]);
            } else {
                $this->__action = $this->__action;
            }

            // handle params

            $this->__params = array_values($urlArray);
            if(method_exists($this->__controller, $this->__action)) {
                call_user_func_array([$this->__controller, $this->__action], $this->__params);
            }else {
                $this->renderError('404');
            }
        } else {
            $this->renderError('404');
        }
    }

    function renderError($name)
    {
        require_once 'app/view/errors/' . $name . '.php';
    }
}
