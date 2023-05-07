<?php
class editarController {

    public function index($id = '', $nome = '', $email = ''){
        if(!empty($id) && !empty($nome) && !empty($email)){
            $editar = new Editar;
            return $editar->editar($id, $nome, $email);
        }else{
            return [
                'status' => 'ERROR',
                'message' => 'Informe o id, nome e email do usuario'
            ];
        }
    }

}

//para editar um usuario é necessario usar api/editar/index/$id/$nome/$email/
