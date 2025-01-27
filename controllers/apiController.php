<?php 
    /**
     * 
     */

    ini_set('log_errors', 1);
    ini_set('error_log', '/path/to/php-error.log');
    error_reporting(E_ALL);


    class apiController extends controller{

    public function buscarSinopse($id){

        $api = new Api();
        $response = $api->buscar_detalhe();
        
        $data = json_decode($response, true);
        echo json_encode($data);
        exit;
        
    }   

    public function buscar_filme(){

        $api = new Api();

        $response = $api->buscar_tudo();
        
        $data = json_decode($response, true);
        echo json_encode($data);
        exit;
    }


      
     

     
     }




?>