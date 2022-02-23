<?php

/**
 * En esta clase sirve de inicio para la aplicación y para instanciar todas las clases
 * en un solo sitio
 * 
 * El metodo run es quien inicia la app con el enrutador
 */

namespace app\Core;



class Application{
    public Router $router;
    public Request $request;


    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
