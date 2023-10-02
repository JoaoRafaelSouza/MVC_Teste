<?php

namespace Views;

class ContatoView{
    private $filename;
    public function __construct($filename){
        $this->filename = $filename;
    }
    public function render(){
        include('pages/'.$this->filename.'.php');
    }
}
