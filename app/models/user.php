<?php 

namespace MVC\models;

use MVC\core\model;

class user extends model{

    public function DataUsers(){

        $data = model::db()->rows("SELECT * FROM user");
        return $data;
    }


    public function DataUser($email, $password){

        $data = model::db()->row("SELECT * FROM `user` Where `email`='$email' AND `password`='$password'");
        return $data;
    }

    public function DataId($id){

        $data = model::db()->row("SELECT * FROM `user` Where `id`='$id' ");
        return $data;
    }

    public function NewUser($username, $password, $email, $fullname) {

        // print_r($_POST);
        // echo $username . " " . $password . " ". $email . " " .$fullname;

        model::db()->insert('user', ['username' => "$username", 'email'=> "$email", 'password'=> "$password", 'fullname' => "$fullname"]);

    }



}