<?php
$autoload = function ($class) {
    if ($class == 'Email') {
        include('PHPMailer/src/PHPMailer.php');
    } else {
        include($class . '.php');
    }
};

spl_autoload_register($autoload);

$app = new Application();
$app->exceutar();
