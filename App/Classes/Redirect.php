<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 05/09/2026
 * Time: 19:45
 */
namespace App\Classes;


class Redirect
{

    public function redirect($redirect = null)
    {
        if(is_null($redirect))
        {
            return header('Location:/');
        }
        return header('Location:$redirect');
    }

}