<?php
namespace app\Core;
class Controller {

/*
Devuelve el archivo de la vista
$complete_path = $this->viewParamete($view); Convierte el string en array con los valores de path y vista
auth.login = $complete path ={auth, login}
Si el array viene con mas de un parametros la posicion 0 es el directorio y la 1 la vista
Si no es que solo trae la vista que la busca en el directorio view
Gracias a este require se pueden usar toda la herencia de controller en las vistas
*/
    public function view($view = null, $data =array() )
    {
        //Convierte lo que venga en el array en variables
        // tipo "page_name => mipagina" con extract te saca los datos
        //clave par y los traduce en variable valor
        extract($data);




        $complete_path = $this->viewParamete($view);

        if(count($complete_path)> 1)
        {
            if(file_exists(APPDIR."/Views/".$complete_path[0]."/".$complete_path[1].".view.php"))
            {
                require (APPDIR."/Views/".$complete_path[0]."/".$complete_path[1].".view.php");
            }else{
                require (APPDIR."/Views/404.view.php");
            }
        }else{
            if(file_exists(APPDIR."/Views/".$complete_path[0].".view.php"))
            {
                require (APPDIR."/Views/".$complete_path[0].".view.php");
            }else{
                require (APPDIR."/Views/404.view.php");
            }

        }


    }

    /* Recorre la cadena que viene en $view de la siguiente manera  parte1.parte2 y separa las partes
    en $arr_view. Luego cuenta cuantos items tiene el array y si el array tiene mas de un parametros
    significa que tiene expecificada una ruta y sino es solo en nombre de la vista
    Con lo que quedaria el nuevo array $narry:
    Sin ruta (solo un parametro)
    $narry[0] = $arr_view
    Con ruta (más de uno)
    $narry[0] = ruta
    $narry[1] = vista  */

    public function viewParamete($view = null)
    {
        $arr_view = explode(".", $view);
        $lenght_view = count($arr_view);
        if ($lenght_view > 1){
            foreach($arr_view as $key=> $value){
                $narry[$key] = $value;
            }
            return $narry;
        }else{
            return $narry[0] = $arr_view;
        }
    }

    public function load_model($model)
    {
        if(class_exists("\app\Models\/".ucfirst($model)))
        {
            $modelinstance = "\app\Models\/".ucfirst($model);
            return $model = new $modelinstance;
        }
        return false;
    }
}


