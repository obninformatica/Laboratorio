<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 06/09/2026
 * Time: 05:28
 */
namespace App\Controllers;


class BaseController
{
    protected $twig;

    public function setTwig($twig)
    {
        $this->twig = $twig;
    }

}