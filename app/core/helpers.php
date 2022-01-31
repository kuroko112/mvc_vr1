<?php 
namespace MVC\core;
class helpers {

    public static function reheader($path) { 
        echo 'test';
        header('LOCATION: '.DOMAIN_NAME.$path);

    }



}