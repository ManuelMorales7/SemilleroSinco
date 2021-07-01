<?php

class Err extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Error al cargar recurso";
        $this->view->render('error/index');
        
    }
}

?>