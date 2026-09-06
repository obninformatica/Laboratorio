<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 05/09/2026
 * Time: 19:32
 */
use App\Classes\Template;
use App\Classes\Parameters;

$parameters = new Parameters();
dump($parameters->explodeParameters());

$template = new Template();
$twig = $template->init();
//dump($twig);


/**
 * chamando o controller digitado na URL (URI)
 * http://localhost/controller
*/
$callController = new App\Controllers\Controller;
$calledController = $callController->controller();
//dump($calledController);
$controller = new $calledController();
$controller->setTwig($twig);

/**
 * Chamando o metodo digitado na URL (URI)
 * http://localhost/controller/metodo
*/
$callMethod = new App\Controllers\Method();
$method = $callMethod->method($controller);

/**
 * Chamando o controller através da classe controller e da classe method
 */
$controller->$method();


