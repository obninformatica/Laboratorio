<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 25/06/2026
 * Time: 10:05
 */
namespace App\Controllers\Site;

use App\Controllers\BaseController;

class ProdutoController extends BaseController
{
    public function index()
    {
        dump('Estamos aqui no INDEX...');
    }

    public function codigo()
    {
        dump('Precisa entrar com o código válido');
    }

}