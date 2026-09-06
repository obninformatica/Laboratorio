<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 05/09/2026
 * Time: 19:32
 */

/**
 * chamando o controller digitado na URL
 * http://localhost/controller
*/
$callController = new App\Controllers\Controller;
$calledController = $callController->controller();
//dump($calledController);
$controller = new $calledController();

/**
 * Chamando o metodo digitado na URL
 * http://localhost/controller/metodo
*/
$callMethod = new App\Controllers\Method();
$method = $callMethod->method($controller);

/**
 * Chamando o controller através da classe controller e da classe method
 */
$controller->$method();


