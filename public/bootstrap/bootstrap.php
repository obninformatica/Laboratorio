<?php

use App\Classes\Template;

$template = new Template();
$twig = $template->init();

// Chamando as funcções do functionsTwig
$twig->addFunction($siteurl);


$controller = new App\Controllers\Controller();
$object = $controller->controller();

$method = new App\Controllers\Method();
dump('Estou aqui: ',$method->method($object));
