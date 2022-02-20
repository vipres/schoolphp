<?php
namespace app\Controllers\Auth;
use app\Core\Controller;
class SignupController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->view('auth.signup');
    }
}
