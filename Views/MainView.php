<?php

namespace Views;
 class MainView{
    private $header;
    private $footer;
    private $filename;

    const titulo = 'Projeto MVC';
    public $menuItens = array('Principal','Contato','Sobre');

    public function __construct($filename, $header = 'cabecalho', $footer = 'rodape'){
        $this->filename = $filename;
        $this->header = $header;
        $this->footer = $footer;
    }

    public function render($arr = []){
        include('pages/template/'.$this->header.'.php');
        include('pages/'.$this->filename.'.php');
        include('pages/template/'.$this->footer.'.php');
    }
 }

 ?>