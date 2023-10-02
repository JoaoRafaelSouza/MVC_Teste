<?php
define('INCLUDE_PATH','http://localhost:8090/Curso de PHP/Modulo_/MVC_Teste/');
define('INCLUDE_PATH_FULL','http://localhost:8090/Curso de PHP/Modulo_/MVC_Teste/Views/pages/template/');
class Application
{
    public function exceutar()
    {
        $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Principal';

        $url = ucfirst($url);
        $url .= "Controller";

        if (file_exists('Controllers/' . $url . '.php')) {
            $className = 'Controllers\\' . $url;
            $controller = new $className;
            $controller->executar();
        } else {
            die("Não existe controlador!");
        }
    }

    
}
