<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 06/09/2026
 * Time: 05:25
 */
namespace App\Controllers\Site;

use App\Controllers\BaseController;


class HomeController extends BaseController
{
    public function index()
    {
        $dados =
            [
                'titulo' => 'Curso PHPOO | Loja Virtual',
                'produtos' => 'Produtos Aqui',
                'produtosPromocao' => 'Produtos em Promoção'
            ];

        $template = $this->twig->load('site_home.html');
        $template->display($dados);
    }

}