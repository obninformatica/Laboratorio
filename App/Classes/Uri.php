<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 05/09/2026
 * Time: 19:37
 */

namespace App\Classes;


class Uri
{

    private $uri;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    public function emptyUri()
    {
        return ($this->uri == '/') ? true : false;
    }

    public function getUri()
    {
        return $this->uri;
    }
}