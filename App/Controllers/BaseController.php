<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 05/09/2026
 * Time: 09:21
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