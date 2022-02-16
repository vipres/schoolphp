<?php

class App
{
    protected $controller = "home";
    protected $method  = "index";
    protected $params  = array();

    public function __construct()
    {
        print_r($this->getURL());
    }

    private function getURL()
    {
        return explode("/", $_GET['url']);
    }
}
