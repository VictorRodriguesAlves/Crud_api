<?php
class Exibir extends Conection {

    public function exibir(){
        $sql = "SELECT * FROM usuarios";
        $sql = Conection::getConn()->prepare($sql);
        
        if($sql->execute()){
            $results = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }else{
            return [
                'status' => 'ERROR',
                'message' => 'Ocorreu algum erro ao exibir.'
            ];
        }


    }

    public function exibirEspecifico($id){
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $sql = Conection::getConn()->prepare($sql);

        $sql->bindValue(1, $id);
        if($sql->execute()){
            $results = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }else{
            return [
                'status' => 'ERROR',
                'message' => 'Ocorreu algum erro ao exibir.'
            ];
        }
    }

}