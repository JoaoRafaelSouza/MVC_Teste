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
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>CSS/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>CSS/bootstrap.min.css" />

    <!-- Aqui temos os arquivos JS -->
    <script src="<?php echo INCLUDE_PATH_FULL ?>JS/jquery-min.js"></script>
    <script src="<?php echo INCLUDE_PATH_FULL ?>JS/bootstrap.min.js"></script>
    <script src="<?php echo INCLUDE_PATH_FULL ?>JS/bootstrap-notify.min.js"></script>
    <script src="<?php echo INCLUDE_PATH_FULL ?>JS/jquery.mask.min.js"></script>

</head>

<body>

    <div class="col-12">
        <nav class="navbar navbar-expand-md navbar mb-4">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">João Rafael</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php
                    echo '<ul class="navbar-nav me-auto mb-2 mb-md-0">';
                    foreach ($this->menuItens as $key => $value) {
                        echo '<li class="nav-item">';
                        echo '<a href="' . INCLUDE_PATH . strtolower($value) . '" class="nav-link active" aria-current="page">' . $value . '</a></li>';
                    }
                    echo '</ul>';
                    ?>
                </div>
            </div>
        </nav>