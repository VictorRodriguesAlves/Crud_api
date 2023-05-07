<?php
class deletarController {

    public function index($id){

        if(!empty($id)){
            $deletar = new Deletar;
            return $deletar->deletar($id);
        }else{
            return [
                'status' => 'ERROR',
                'message' => 'Informe um id valido'
            ];
        }

    }

}

//para editar um usuario é necessario usar api/deletar/index/$id/