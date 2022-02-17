<?php

class Controller {

    public function view($view, $data =array() )
    {
        //Convierte lo que venga en el array en variables
        // tipo "page_name => mipagina" con extract te saca los datos
        //clave par y los traduce en variable valor
        extract($data);



        if(file_exists(APPDIR."/Views/".$view.".view.php"))
        {
            return file_get_contents(APPDIR."/Views/".$view.".view.php");
        }else{
            return file_get_contents(APPDIR."/Views/404.view.php");
        }
    }

}
