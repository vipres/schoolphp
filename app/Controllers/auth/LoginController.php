<?php

class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->view('login');
    }
}
