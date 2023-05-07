<?php
class exibirController {

    public function index(){
        $exibir = new Exibir;
        return $exibir->exibir();
    }

    public function exibirEspecifico($id){
        $id = filter_var($id, FILTER_SANITIZE_SPECIAL_CHARS);
        $exibir = new Exibir;
        return $exibir->exibirEspecifico($id);
    }

}