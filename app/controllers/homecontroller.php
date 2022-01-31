<?php 

    namespace MVC\controllers;
    use MVC\core\controller;
    use MVC\models\user;
    use GUMP;
    use MVC\core\helpers;
    use MVC\core\session;

class homecontroller extends controller{
        
        public function __construct()
        {
            session::Start();
        }

        public  function  index() {

            $user = new user();

            $data = $user->DataUsers();

            $title = 'home index';

            $this->view("home\index", ['tital'=>$title,'h1'=>'mida', 'data'=>$data]);
        }

        public  function  add() {
            $title = 'Add user';
            
            $this->view("add\index",['title'=> $title, 'h1' => 'mida']);

        }

        public function login() {
            $title = "login ";
            $this->view("login\index",['title'=> $title, 'h1' => 'mida']);

        }

        public function postlogin() {
            

            $is_valid = GUMP::is_valid($_POST,[
                'email' => 'required'
            ]);

            if($is_valid == 1)
            {
                
                $user = new user();
                
                $data = $user->DataUser($_POST['email'], $_POST['password']);

                session::Set('user',$data);
                
                helpers::reheader('/user/profile');
                
            }

        }

        public function register() { 

            $title = 'register';
            $head  = 'register page';
            $this->view('register\index',['title'=>$title, 'head'=>$head]);

        }


        public function postregister() {
            
            $v = GUMP::is_valid($_POST, [

                'name'=>'required',
                'email'=>'required|valid_email',
                'password'=>'required',
                'fullname'=>'required'

            ]);
            
            if($v == 1) {

                $user = new user;
                $username = $_POST['name'];
                $password = $_POST['password'];
                $email    = $_POST['email'];
                $fullname = $_POST['fullname'];
                $user->NewUser($username, $password, $email, $fullname);
                
                helpers::reheader('/home/login');


            } 

            


        }

        public function logout() {

            session::Stop();

        }

        


    }