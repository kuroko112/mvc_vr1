<?php 



    // core controllers this controller get a viwe 

    namespace MVC\core;
    
    class controller {

        public function view($path,$pram) { 
            extract($pram);
            
            require_once(VIEWS.$path.".php");
            

        }

    }