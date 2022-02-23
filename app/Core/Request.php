<?php

/**
 * Funcion strpos
 *   substr($path, 0, $position);
 *  Encuentra la posición numérica de la primera ocurrencia del needle (aguja)
 * en el string haystack (pajar).
 * $position = strpos($path, '?'); Devuelve los caracteres que hay hasta ? en la url
 *
 *
 * Funcion substr(string $string, int $start, int $length = ?): string
 * Devuelve una parte del string definida por los parámetros start y length.
 * $rest = substr("abcdef", -1);    // devuelve "f"
 *
 * $rest = substr("abcdef", -1);    // devuelve "f"
 *
 * Devuelve el path  public function getPath()
 * $path rescata el Request_uri que es lo que viene por la url a partir del dominio
 * pe: www.dominio.com/hola?id=1 pues devuelve hola?id=1. ?? es si viene vacio el valor es /
 * Lo que hacemos despues es recorremos el path hasta la ? y con strpos sacamos el numero
 * en este caso la posicion seria 5
 *
 * Pero si no hay ? con lo cual la posicion es false entonces devuelve el path como venga
 * /hola
 * Y si lo hay devuelve el path solo desde la posion 0 hasta la posicion 5 y esto es igual a /hola
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if($position === false){
            return $path;
        }
         return substr($path, 0, $position);
    }
 *
 * Devuelve si el metodo es GET o POST pero en minusculas
    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
 *
 */





namespace app\Core;


class Request
{

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if($position === false){
            return $path;
        }
         return substr($path, 0, $position);
    }

    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isGet()
    {
        return $this->method() === 'get';
    }

    public function isPost()
    {
        return $this->method() === 'post';
    }

    public function getBody()
    {
        $body = [];
        if ($this->method() === 'get')
        {
            foreach($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET,  $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if ($this->method() === 'post')
        {
            foreach($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_GET,  $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $body;
    }
}
