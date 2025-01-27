<?php 
    /**
     * 
     */
    class detalhesController extends controller{

 
        public function index(){    
            $dados = array('dados'=>'');
           
            $a = new api();

            if(isset($_GET['id'])){

               $id = $_GET['id'];
              
               $data = $a->calcularIdadeFilme($id);

               $dados['dados'] = $data; 


            }

            $this->loadTemplate('detalhes', $dados);
        }

   
     }




?>