<?php 

    namespace MVC\controllers;
    use MVC\core\controller;
    use MVC\models\user;
    use GUMP;
    use MVC\core\helpers;
    use MVC\core\session;

    class usercontroller extends controller {


        public function __construct()
        {
            session::Start();
            $data_user = session::Get('user');
            
            if(empty($data_user)) {

                echo 'class is not access';die;

            }
        }

        public function profile() {
            
            
            $id_user = $_SESSION['user']['id'];
            $user   = new user;
            $data = $user->DataId($id_user);
            $title = "profile";
            $username = $data['username'];
            $head  = 'welcome '. $username;
            $this->view('profile/index', ['user'=>$data, 'title' => $title, 'head' => $head]);
            

        }

        public function add() {

            echo "add";

        }

    }