<?php

class App {
    protected $controller = 'Login';
    protected $method = 'masuk';
    protected $params = [];

    public function __construct() 
    {
        $url = $this->parseURL();
        
        //controller
        if ( isset($url[0])) {
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //method
        if ( isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //params
        if ( !empty($url)) {
            $this->params = array_values($url);
        }

        //jalankan controller, method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        $url = [null, null];
        if (isset($_GET["controller"])) {
            $url[0] = $_GET["controller"];
        }
        if (isset($_GET["method"])) {
            $url[1] = $_GET["method"];
        }
        return $url;
    }
}