<?php

/**
 * $registerModel->loadData($request->getBody());
 *
 * Llama al modelo register con la instancia de new registerModel
 * loadData inicializa las propiedades del modelo y le pasa los datos del post a cada uno el suyo pero
 * sanitizados con el getBody. Al final registerModel tiene el los datos del post limpios e inicializados en el modelo
 *

 */


namespace app\controllers\auth;

use app\core\Controller;
use app\core\Request;
use app\Models\RegisterModel;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->view('auth.login');
    }

    public function register(Request $request)
    {
        $registerModel = new RegisterModel;
        if($request->isPost()){

            $registerModel->loadData($request->getBody());

            if($registerModel->validate() && $registerModel->register()){
                echo '<pre>';
                var_dump($registerModel);
                echo '<pre>';
                exit();
            }

        }

        $this->setLayout('auth');
        return $this->view('auth.signup', [
            'model' => $registerModel
        ]);
    }
}
