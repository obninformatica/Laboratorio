<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 05/09/2026
 * Time: 19:32
 */

$controller = new App\Controllers\Controller;
$object = $controller->controller();

$method = new App\Controllers\Method();
dump($method->method($object));
