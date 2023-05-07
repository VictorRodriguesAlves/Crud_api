<?php
class Editar extends Conection {

    public function editar($id, $nome, $email){
        $id = filter_var($id, FILTER_SANITIZE_SPECIAL_CHARS);
        $nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $sql = "UPDATE usuarios SET nome = ?, email = ? WHERE id = ?";
        $sql = Conection::getConn()->prepare($sql);
 
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $email);
        $sql->bindValue(3, $id);
        
        if($sql->execute()){
            return [
                'results' => 'Editado com sucesso'
            ];
         }else{
            return [
                'status' => 'ERROR',
                'message' => 'Ocorreu um erro ao editar o usuario'
            ];
         }
    }

}