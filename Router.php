<?php
class Router
{
    public static function rota($path, $arg){
        $url = @$_GET['url'];
        if($url == $path){
            $arg();
            die();
        }
        $path = explode('/', $path);
        $url = explode('/', @$_GET['url']);
        $funcionou = true;
        $par = [];

        if(count($path) == count($url)){
            foreach($path as $key => $value){
                if($value == '?'){
                    $par[$key] = $url[$key];
                }
                else if($url[$key] != $value){
                    $funcionou = false;
                    break;
                }
            }
            if($funcionou){
                $arg($par);
                die();
            }
        }
    }
}
