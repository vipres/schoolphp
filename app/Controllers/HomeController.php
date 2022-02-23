<?php
namespace app\Controllers;
use app\Core\Controller;
use app\Core\Request;
class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $params = [
            "name" => "VipresInmobiliaria"
        ];
        return $this->view('home', $params);
     }

     public function contact()
    {
       //return 'Show contact form';
       return $this->view('contact');
    }
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '<pre>';
        exit();
        return 'Handling submitted data';
    }
}

