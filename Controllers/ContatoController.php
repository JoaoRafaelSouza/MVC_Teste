<?php
namespace Controllers;
use Models\ContatoModel;
use Views;
class ContatoController extends Controller
{
    public function __construct(){
        $this->view = new Views\MainView('contato');
    }
    public function executar()
    {
        if(isset($_POST['acao'])){
            ContatoModel::enviarFormulario();
            echo '<script> alert("Enviado com sucesso!")</script>';
        }

        $this->view->render(array('titulo'=>'Contato'));
    }
}
?>