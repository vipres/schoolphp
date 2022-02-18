<?php
namespace app\Controllers;
use app\Core\Controller;
class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->view('home');
    }
}

