<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 06/09/2026
 * Time: 12:27
 */
namespace App\Classes;


class Parameters
{
    private $uri;
    private $parameter;

    public function __construct()
    {
        $uri = new Uri();
        $this->uri = $uri->getUri();
    }

    private function explodeParameters()
    {
        $explodeUri = explode('/', $this->uri);
        $this->parameter = array_filter($explodeUri);
        //return $this->parameter;
        //dump($this->parameter);
    }

    public function getParameterMethod($object,$method)
    {
        // method_exists(classe,etodo);
        if(method_exists($object,$method))
        {
            $this->explodeParameters();

            if($method == 'index')
            {
                unset($this->parameter[1]);
                return isset($this->parameter[2]) ? array_values($this->parameter) : null;
            }
            unset($this->parameter[1],$this->parameter[2]);
            return isset($this->parameter[3]) ? array_values($this->parameter) : null;
        }

    }







}