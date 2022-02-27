<?php
//DE MOMENTO ESTE ARCHIVO NO HACE NADA
namespace app\Core;

class Autoload{

    public function __construct()
    {
        require "config.php";
        require "database.php";
        require "controller.php";
        require "model.php";
        require "app.php";
    }


}


