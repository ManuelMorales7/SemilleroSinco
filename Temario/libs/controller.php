<?php

class Controller{

        function __construct() {
            $this->view = new View();     
        }


        function loadModel($model){     
            $url = 'models/' . $model . 'model.php';

                if(file_exists($url)){
                    require $url;

                    $modelName = $model. 'Model';
                    $this->model = new $modelName();
                }

        }


        /*

        function existPOST($params){

            foreach($params as $params){

                if(!isset($_POST)){
            
                    echo "Lo que buscas no existe";
                    return false;
                }
            }

        return true;
        }

        
        function existGET($params){

            foreach($params as $params){

                if(!isset($_GET)){
            
                    echo "Lo que buscas no existe";
                    return false;
                }
            }

        return true;
        }


        function getGet($name){
            return $_GET[$name];
        }

        function getPost($name){
            return $_POST[$name];
        }


        
        
        function redirect($route, $mensajes){
            $data = [];
            $params = '';

            foreach($mensajes as $key => $mensaje){
                array_push($data, $key . '=' . $mensaje);
            }

            $params = join('&', $data);

            if($params != ''){
                $params = '?' . $params;
            }

            header('location: ' .constant('$URL') . $route . $params);
        }
        

*/


}



?>