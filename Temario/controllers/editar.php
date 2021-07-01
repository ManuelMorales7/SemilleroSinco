<?php

class Editar extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('editar/index');
    }
}

?>