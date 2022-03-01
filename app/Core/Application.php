<?php

/**
 * En esta clase sirve de inicio para la aplicación y para instanciar todas las clases
 * en un solo sitio
 *
 * El metodo run es quien inicia la app con el enrutador
 */

namespace app\Core;



class Application{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;
    public static Application $app;
    public Controller $controller;


    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->response = new Response();
        $this->request = new Request();
        $this->router = new Router($this->request, $this->response);
        $this->controller = new Controller();
        $this->db = new Database($config['db']);
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    public function setController(Controller $controller)
    {
        $controller = $this->controller;
    }

    public function getController(): Controller
    {
        return $this->controller;
    }
}
