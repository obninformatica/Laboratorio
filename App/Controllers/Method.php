<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 05/09/2026
 * Time: 20:39
 */
namespace App\Controllers;

use App\Classes\Uri; // usar esta classe para get uri

class Method
{
    private $uri;

    public function __construct()
    {
        $this->uri = new Uri();
    }

    private function getMethod()
    {
        if (!$this->uri->emptyUri()) {
            $explodeUri = array_filter(explode('/', $this->uri->getUri()));
            //return (isset($explodeUri[2])) ? $explodeUri[2] : null;
            return (!isset($explodeUri[2])) ? : $explodeUri[2];
        }
    }

    public function method($object)
    {
        //dump($this->getMethod());
        if(method_exists($object, $this->getMethod()))
        {
            return $this->getMethod();
        }
        return DEFAULT_METHOD;

    }

}