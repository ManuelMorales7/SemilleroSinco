<?php

class Login extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('login/index');
    }

    function login(){

        $usuario = $_POST['user'];
        $password = $_POST['pass'];

        if(isset($_POST['user']) && isset($_POST['pass'])){

            $this->model->login($usuario, $password);

        }
 



        


        //echo "Welcome";
        //$this->model->insert();
    }

    
}

?>