<?php
class editarController {

    public function index(){
        require('views/editar.php');
    }

    public function editar(){
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $id = $_GET['id'];
        $parametros = [$id, $nome, $email];
        $api = new api_functions;
        $results = $api->api_request('editar', 'index', $parametros);
        if($results['status'] == 'SUCCESS'){
            header("Location: ../home");
        }
    }

}