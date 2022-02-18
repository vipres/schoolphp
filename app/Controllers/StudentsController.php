<?php
namespace app\Controllers;
use app\Core\Controller;
class StudentsController extends Controller
{
    public function __construct()
    {
        echo "Hola StudentsController";
    }

    public function index($id=null)
    {
        echo "Index de Students".$id;
    }
}
