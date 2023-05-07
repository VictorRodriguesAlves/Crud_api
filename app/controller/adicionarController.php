<?php
class adicionarController {

    public function index(){
        require('views/adicionar.php');
    }

    public function adicionar(){
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $variaveis = [$nome ,$email];
        $api = new api_functions;
        $results = $api->api_request('adicionar', 'index', $variaveis);
        if($results['status'] == 'SUCCESS'){
            header("Location: ../home");
        }
    }
}