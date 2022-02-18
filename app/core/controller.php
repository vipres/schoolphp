<?php
namespace app\Core;
class Controller {

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
}


