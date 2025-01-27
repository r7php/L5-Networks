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
               $dados['dados'] = $_GET['id']; 

               $data = $a->buscar_detalhe($id);

            

            }

            $this->loadTemplate('detalhes', $dados);
        }

   
     }




?>