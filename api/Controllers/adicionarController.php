<?php
class adicionarController {

    public function index($nome = '', $email = ''){
        if(!empty($nome) && !empty($email)){
            $adicionar = new Adicionar;
            return $adicionar->adicionar($nome, $email);
        }else{
    
            return [
                'status' => 'ERROR',
                'message' => 'Informe nome e email validos'
            ];
        }
    }

}
/*
para adicionar um usuario é necessario usar api/adicionar/index/$nome/$email

*/