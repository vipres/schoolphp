<?php
namespace app\Core;


class App
{
    protected $controller = HOME;
    protected $method  = "index";
    protected $params  = array();
    protected $controller_path = null;
    protected $URL = HOME;

    public function __construct()
    {

       $this->URL = $this->getURL();
       $this->controllerExists();
       $this->loadMethod();

    }

    private function getURL()
    {
        /*
            Ten en cuenta que el parametro url del get
            es la variable que se pasa a través del htaccess
            RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]
        */
        $url = isset($_GET['url']) ? $_GET['url'] : HOME;


        return explode("/", filter_var(trim($url, "/")), FILTER_SANITIZE_URL);
    }

    private function loadnamespace($subdir = null)
    {
        if(!is_null($subdir)){
            $controller_path = '\app\Controllers\\'.$subdir;

        }else{
            $controller_path = '\app\Controllers';
        }
        $controller = $this->controller;
        $load_class = "$controller_path\\$controller";
        $this->controller = new $load_class;
    }

    private function completeControllerName ($partial = null)
    {
        $this->controller = ucfirst($this->URL[0]) . "Controller";
        unset($this->URL[0]);
        return $this;
    }

    private function controllerExists()
    {
        match($this->URL[0]){
            empty($this->URL[0]) => $data = ucfirst(HOME),
        };

        if(empty($this->URL[0])){
            if (file_exists(APPDIR . "Controllers/" . ucfirst(HOME) . "Controller.php")) {
                $this->completeControllerName()->loadnamespace();
                }
            }

          if($this->URL[0] === "login"){
             $this->controller_path = "auth";
          }
            if (is_null($this->controller_path)) {
                if (file_exists(APPDIR . "Controllers/" . ucfirst($this->URL[0]) . "Controller.php")) {

                    $this->completeControllerName()->loadnamespace();
                }
            }else{

                if(file_exists(APPDIR."Controllers/".$this->controller_path."/".ucfirst($this->URL[0])."Controller.php"))
                {

                $this->completeControllerName()->loadnamespace($this->controller_path);
                }
            }
            return $this;
    }

    private function loadMethod()
    {
        if (isset($this->URL[1])) {
            if (method_exists($this->controller, $this->URL[1])) {

                $this->method = ucfirst($this->URL[1]);
                unset($this->URL[1]);
            }
        }
        $URL = array_values($this->URL);
        $this->params = $URL;
        call_user_func_array([$this->controller, $this->method], $this->params);
        return $this;
    }
}
