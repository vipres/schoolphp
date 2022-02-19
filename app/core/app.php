<?php
namespace app\Core;


class App
{
    protected $controller = HOME;
    protected $method  = "index";
    protected $params  = array();
    protected $controller_path = null;

    public function __construct()
    {

       $URL = $this->getURL();

       if(empty($URL[0])){
        if (file_exists(APPDIR . "Controllers/" . ucfirst(HOME) . "Controller.php")) {
            $this->controller = ucfirst(HOME) . "Controller";

            $controller_path = '\app\Controllers';
            $controller = $this->controller;
            $load_class = "$controller_path\\$controller";
            $this->controller = new $load_class;
            }
        }

      if($URL[0] === "login"){
         $this->controller_path = "auth";
      }

        if (is_null($this->controller_path)) {
            if (file_exists(APPDIR . "Controllers/" . ucfirst($URL[0]) . "Controller.php")) {
                $this->controller = ucfirst($URL[0]) . "Controller";
                unset($URL[0]);
                $this->loadnamespace();


            }
        }else{

            if(file_exists(APPDIR."Controllers/".$this->controller_path."/".ucfirst($URL[0])."Controller.php"))
            {
            $this->controller = ucfirst($URL[0])."Controller";

            $this->loadnamespace($this->controller_path);
            }
        }



        if (isset($URL[1])) {
            if (method_exists($this->controller, $URL[1])) {

                $this->method = ucfirst($URL[1]);
                unset($URL[1]);
            }
        }
        $URL = array_values($URL);
        $this->params = $URL;
        call_user_func_array([$this->controller, $this->method], $this->params);

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
        $url = isset($_GET['url']) ? $_GET['url'] : HOME;

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

    private function loadnamespace($subdir = null)
    {
                if(!is_null($subdir)){
                    $controller_path = '\app\Controllers\\'.$subdir;
                    $controller = $this->controller;
                    $load_class = "$controller_path\\$controller";
                    $this->controller = new $load_class;


                }else{
                    $controller_path = '\app\Controllers';
                    $controller = $this->controller;
                    $load_class = "$controller_path\\$controller";
                    $this->controller = new $load_class;
                }

    }
}
