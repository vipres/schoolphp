<?php

namespace app\Core;

class Auth
{
    protected $controller = "LoginController";
    public function login($URL)
    {


        if(file_exists(APPDIR."Controllers/Auth/".ucfirst($URL)."Controller.php"))
       {
            $this->controller = ucfirst($URL)."Controller";

       $controller_path = APPDIR.'Controllers/Auth';
       $controller = $this->controller;
       $load_class ="$controller_path/$controller.php";

       require $load_class;

        $controller_path = '\app\Controllers\Auth';
        $controller = $this->controller;
        $load_class ="$controller_path\\$controller";

        $login = $this->controller = new $load_class;

        return $login->index();
       }

    }
}

