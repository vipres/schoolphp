<?php
//DE MOMENTO ESTE ARCHIVO NO HACE NADA
namespace app\Core;

class Autoload{

    public function __construct()
    {
        require "config.php";
        require "controller.php";
        require "app.php";
        require "database.php";
    }
}
