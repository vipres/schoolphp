<?php
namespace app\Controllers\Auth;
use app\Core\Controller;
class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->view('auth.login');
    }
}
