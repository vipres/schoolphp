<?php

class App
{
    protected $controller = "HomeController";
    protected $method  = "index";
    protected $params  = array();

    public function __construct()
    {

       $URL = $this->getURL();

       /*
        Tomo el parametro que viene por la url
        Si existe un archivo que por la url sea /students en primer
        segmento $URL[0] añadele Controller.php y buicalo en la carpeta
        app/Controllers
          y la instancia de $controller que por defecto es HomeController ahora sera
          StudentController
       */

       if(file_exists(APPDIR."Controllers/".ucfirst($URL[0])."Controller.php"))
       {
            $this->controller = ucfirst($URL[0])."Controller";
            unset($URL[0]);
                 /*
        Si este if se cumple llamará a ../app/Controllers/(Students o lo que sea)Controller.php
        en el require sino tomara el valor por defecto de HomeController
       **/

       require APPDIR."Controllers/".$this->controller.".php";

       /**
        * Una vez tenemos el require del archivo de controlador hecho hago una nueva instancia de la clase
        * que incluya este require ej: Si el require esta llamando a StudentsController.php estaremos con
        * $this->controller = new $this->controller haciendo una nueva instancia de la clase StudentController
        */
        $this->controller = new $this->controller;



            if(isset($URL[1]))
            {
                if(method_exists($this->controller, $URL[1]))
                {

                    $this->method = ucfirst($URL[1]);
                    unset($URL[1]);
                }
            }
            $URL = array_values($URL);
            $this->params = $URL;
            call_user_func_array([$this->controller, $this->method],$this->params);

       }



    }

/*
    esta funcion es para obtener la url limpia y todos los parametros

*/
    private function getURL()
    {
        /*
            Ten en cuenta que el parametro url del get
            es la variable que se pasa a través del htaccess
            RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]
        */
        $url = isset($_GET['url']) ? $_GET['url'] : "HomeController";

           /**
     * Array
     * Esto es lo que devuelve con el explode y filter_var limpia la
     * url y cada segmento lo pone en un array
        (
        [0] => asas
        [1] => asa s
        [2] => re
        )
     */
        return explode("/", filter_var(trim($url, "/")), FILTER_SANITIZE_URL);
    }
}
