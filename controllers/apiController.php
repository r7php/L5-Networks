<?php 
    /**
     * 
     */

    ini_set('log_errors', 1);
    ini_set('error_log', '/path/to/php-error.log');
    error_reporting(E_ALL);


    class apiController extends controller{

    public function buscarElenco(){
        if(empty($_POST['caminho'])){
           echo json_encode('Somente requisicao POST');
        }else{


        $caminho = $_POST['caminho'];
        $api = new Api();
        $response = $api->buscarPersonagens($caminho);
        
        echo json_encode($response);
        exit;
    }
        
    }   

 
    public function buscarSinopse(){
         if(empty($_POST['id'])){
           echo json_encode('id invalido, somente requisicao GET');
        }else{

        $id = $_POST['id'];
        $api = new Api();
        $response = $api->buscar_detalhe($id);
        
        echo json_encode($response);
        exit;
    }
        
    }   

    public function buscar_filme(){

        $api = new Api();

        $response = $api->buscar_tudo();
        
        echo json_encode($response);
        exit;
    }


      
     

     
     }




?>