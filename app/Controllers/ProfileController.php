<?php
namespace app\Controllers;
use app\Core\Controller;


class ProfileController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->view('profile');
    }
}
