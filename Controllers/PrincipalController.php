<?php

namespace Controllers;

class PrincipalController extends Controller{
    public function __construct(){
        $this->view = new \Views\MainView('principal');
    }
    public function executar()
    {
        $this->view->render(array('titulo'=>'Principal'));
    }
}

?>