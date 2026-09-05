<?php

$siteurl = new \Twig\TwigFunction('siteurl', function(){
    return 'http://'.$_SERVER['SERVER_NAME'];
});