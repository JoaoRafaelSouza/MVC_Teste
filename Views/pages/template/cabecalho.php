<!DOCTYPE html>
<html>

<head>
    <!-- Aqui estão os metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esta é apenas uma página teste.">

    <!-- Este é o título do projeto -->
    <title> <?php echo self::titulo; ?> </title>

    <!-- Aqui eu tenho meu icone -->
    <link rel="shortcut icon" type="image/png" href="Imagens/icone.ico" />

    <!-- Aqui temos todos os css -->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" type="text/css" />
    <link rel="stylesheet" href="CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="CSS/bootstrap.min.css" />

    <!-- Aqui temos os arquivos JS -->
    <script src="JS/jquery-min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/bootstrap-notify.min.js"></script>
    <script src="JS/jquery.mask.min.js"></script>
    <script src="JS/complemento.js"></script>
    <script src="JS/portifolio.js"></script>

</head>

<body>

    <header class="cabecalho">
        <a href="#" class="logo">João Rafael</a>
        <?php
        foreach ($this->menuItens as $key => $value) {
            echo '<a href="'.INCLUDE_PATH.strtolower($value).'">' .$value.'</a>';
        }
        ?>
        <!-- <nav class="navbar">
            <a href="#principal" style="--i:12" class="ativado">Principal</a>
            <a href="#sobre" style="--i:13">Sobre</a>
            <a href="#habilidades" style="--i:14">Habilidades</a>
            <a href="#portifolio" style="--i:15">Características</a>
            <a href="#contato" style="--i:16">Contato</a>
        </nav> -->
    </header>