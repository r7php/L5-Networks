<?php 

/**
 * 
 */
class api extends model
{
	   

    public function buscarPersonagens($caminho){
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://swapi-node.now.sh/$caminho",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            echo json_encode([
            "error" => "Erro ao conectar à API externa",
            "message" => curl_error($curl),
        ]);

        curl_close($curl);
        exit;
        }
        curl_close($curl);
        $data = json_decode($response, true);
        
        return $data;



    }

    public function calcularIdadeFilme($id){
          $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://swapi-node.now.sh/api/films/$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            echo json_encode([
            "error" => "Erro ao conectar à API externa",
            "message" => curl_error($curl),
        ]);

        curl_close($curl);
        exit;
        }
        curl_close($curl);
        $data = json_decode($response, true);
        
       // $js = json_encode($response);

        //var_dump($js);
        $dt = date("Y-m-d");

         foreach ($data as $value) {
            $res = $value['release_date'];
            $data1 = new DateTime("$dt");
            $data2 = new DateTime("$res");

            $diferenca = $data1->diff($data2);

            return  $diferenca->y;
         }
        

       
        

    }

    public function buscar_detalhe($id){
          $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://swapi-node.now.sh/api/films/$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            echo json_encode([
            "error" => "Erro ao conectar à API externa",
            "message" => curl_error($curl),
        ]);

        curl_close($curl);
        exit;
        }
        curl_close($curl);
        $data = json_decode($response, true);

        return $data;

    }


    public function buscar_tudo(){
                
        $curl = curl_init('https://swapi-node.now.sh/api/films');
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
        ]);

        $response = curl_exec($curl);

        if ($response === false) {
            $this->logBd("Erro ao conectar à API externa: " . curl_error($curl));
            echo json_encode([
                "error" => "Erro de comunicação com a API externa",
                "message" => curl_error($curl)
            ]);
            curl_close($curl);
            exit;
        }

        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($httpCode !== 200) {
            $this->logBd("Erro na API externa: Resposta HTTP " . $httpCode);
            echo json_encode([
                "error" => "Erro na resposta da API externa",
                "message" => "Código de resposta HTTP: $httpCode"
            ]);
            exit;
        }

        $data = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->logBd("Erro ao decodificar a resposta JSON");
            echo json_encode([
                "error" => "Erro ao processar dados da API",
                "message" => "Erro ao decodificar JSON: " . json_last_error_msg()
            ]);
            exit;
        }

        return $data;

    }
    
    private function logBd($msg){
         
        $date = date("Y-m-d H:i:s");
         $sql = "INSERT INTO tb_log (msg, dt_inserido)VALUES (:value1, :value2)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':value1', $value1);
        $stmt->bindParam(':value2', $value2);
        $value1 = $msg;
        $value2 = $date;
        $stmt->execute();
      
   

    }





}







?>