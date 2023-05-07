<?php
class Deletar extends Conection {

    public function deletar($id){
        $id = filter_var($id, FILTER_SANITIZE_SPECIAL_CHARS);

        $sql = "DELETE FROM usuarios WHERE id = ?";
        $sql = Conection::getConn()->prepare($sql);

        $sql->bindValue(1, $id);

        if($sql->execute()){
            return [
                'results' => 'Deletado com sucesso'
            ];
         }else{
            return [
                'status' => 'ERROR',
                'message' => 'Ocorreu um erro ao deletar o usuario'
            ];
         }
    }

}