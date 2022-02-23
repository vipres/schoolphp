<?php
/**
 * call_user_func
 * call_user_func(callable $callback, mixed $parameter = ?, mixed $... = ?): mixed
 * Llama a la llamada de retorno dada por el primer parámetro callback y pasa los parámetros restantes como argumentos.
 * function barbero($tipo)
*   {
 *     echo "Usted quiere un corte de pelo al estilo $tipo, sin problemas\n";
*   }
*   call_user_func('barbero', "seta");
* Usted quiere un corte de pelo al estilo seta, sin problemas
*
*
*
**public function get($path, $callback)
**    {
**
**        $this->routes['get'][$path] = $callback;
**   }
*
* Se llama en el index:
* $app->router->get('/hola', "Hola"); o
* $app->router->get('/', [SiteController::class, 'home']);
*$app->router->get('/hola', function(){
 *   echo "Estoy aqui";
*});
*
* Devuelve que en el array $this->routes en el get se almacena el path y lo que venga
* por el callback (ya sea funcion anonima en la ruta, controlador, strind o lo que sea)
*
* C:\Users\USUARIO\Devel\myschool\schoolphp\app\Core\Router.php:33:
*array (size=1)
*  'get' =>
 *   array (size=1)
 *     '/hola' => string 'Hola' (length=4)  o pejemplo una funcion
*/

namespace app\Core;



class Router
{
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request){

        $this->request = $request;
    }

    public function get($path, $callback)
    {

        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;

        if($callback === false){
            echo "404<br>";
        }

        if(is_string($callback)){
            return $this->renderView($callback);
        }

        return call_user_func($callback, $this->request);
    }

    public function renderView($view, $params = [])
    {
       $viewContent = $this->renderOnlyView($view, $params);
       return $viewContent;
    }

    public function renderOnlyView($view, $params = [])
    {
        ob_start();
        include_once __DIR__.'/../../app/Views/home.view.php';
        return ob_get_clean();
    }


}
