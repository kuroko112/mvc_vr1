<?php 

    namespace MVC\core;    
    use Dcblogdev\PdoWrapper\Database;

    class model{

        static function db() {
        
            // make a connection to mysql here
            $options = [
                //required
                'username' => USERNAME,
                'database' => "login_system",
                //optional
                'password' => PASSWORD,
                'type' => TYPE,
                'charset' => 'utf8',
                'host' => HOST,
                'port' => PORT
            ];
        
            return $db = new Database($options);
        
        }
    }
