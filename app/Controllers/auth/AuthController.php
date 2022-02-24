<?php

namespace app\controllers\auth;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->view('auth.login');
    }

    public function register(Request $request)
    {
        if($request->isPost()){
            return "Post data";
        }

        $this->setLayout('auth');
        return $this->view('auth.signup');
    }
}
