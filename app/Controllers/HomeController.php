<?php
namespace app\Controllers;
use app\Core\Controller;
use app\Core\Database;
use app\Models\User;

class HomeController extends Controller
{


    public function __construct()
    {

    }



    public function getUser()
    {
        return $this->user;
    }

    public function index()
    {


      $arr['firstname'] ='Cristina';
      $arr['lastname'] ='Cabrera Galán';
      $arr['date'] ='2022-02-27 12:14:42';
      $arr['user_id'] ='dsdsd';
      $arr['gender'] ='female';
      $arr['school_id'] ='10';
      $arr['role'] ='students';




        $user = new User();
        $user->insert($arr);
        $data = $user->findAll();
        $this->view('home', ['rows' => $data]);
    }
}

