<?php
namespace Models;

class ContatoModel{
    public static function enviarFormulario(){
        // $mail = new \Email();
        $mail = new \Email('vps.dankicode.com', 'testes@dankicode.com', 'gui123456', 'Guilherme');

        $mail->addAdress('joao.rafael.quin@gmail.com', 'Joao');
        $mail->formatarEmail(array('assunto'=>'Este é um teste de envio de email!', 'corpo'=>'Aqui é somente um teste de envio de email.'));
        $mail->enviarEmail();
    }
}