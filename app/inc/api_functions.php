<?php
class api_functions {

    public function api_request($endpoint, $funcao = 'index',$variaveis = []){
        $api = API_URL.$endpoint.'/'.$funcao.'/';
        if(!empty($variaveis)){
            for($i = 0; $i < sizeof($variaveis); $i++){
                $api .= $variaveis[$i].'/';
            }
        }
        
        $json = file_get_contents($api);
        $data = json_decode($json, true);

        return $data;

    }

}