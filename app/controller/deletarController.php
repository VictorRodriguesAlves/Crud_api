<?php
class deletarController {

    public function index(){

        $id = $_GET['id'];

        $api = new api_functions;
        $variaveis = [$id];
        $results = $api->api_request('deletar', 'index',$variaveis);
        if($results['status'] == 'SUCCESS'){
            header('Location: home');
        }
    }

}