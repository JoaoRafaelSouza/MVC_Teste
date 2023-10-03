<?php

namespace Controllers;

use Views\MainView;
use Models\ContatoModel;

class ContatoController extends Controller
{
    public function __construct()
    {
        $this->view = new MainView('contato');
    }
    public function executar()
    {
        if (isset($_POST['acao'])) {
            ContatoModel::enviarFormulario();
            // echo  INCLUDE_PATH . 'contato/sucesso';
            echo '<script>location.href="'.INCLUDE_PATH.'contato/sucesso"</script>';
            // echo '<script> alert("' . INCLUDE_PATH . 'contato/sucesso")</script>';
            die();
        }

        \Router::rota('contato/sucesso', function () {
            $this->view = new MainView('contato-sucesso');
            $this->view->render(array('titulo' => 'Contato'));
        });

        \Router::rota('contato', function () {
            $this->view = new MainView('contato');
            $this->view->render(array('titulo' => 'Contato'));
        });
    }
}
