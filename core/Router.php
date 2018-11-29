<?php

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
        //PATCH, PUT, DELETE will come here aswell
    ];

    public static function load($file)
    {
        $router = new self();
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        //$this->routes['GET'] gives an array
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        //$this->routes['POST'] gives an array
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requesttype)
    {
        //example: www.wfgamesapp.com/players we only need players
        if (array_key_exists($uri, $this->routes[$requesttype])) {
            return $this->routes[$requesttype][$uri];
        }
        throw new Exception('Sorry uri not defined!');
    }
}