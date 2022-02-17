<?php

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        echo $this->view('home');
    }
}

