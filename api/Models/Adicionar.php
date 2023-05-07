<?php
class Adicionar extends Conection {

    public function adicionar($nome, $email){
         $nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);
         $email = filter_var($email, FILTER_SANITIZE_EMAIL);

         $sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
         $sql = Conection::getConn()->prepare($sql);

         $sql->bindValue(1, $nome);
         $sql->bindValue(2, $email);
         

         if($sql->execute()){
            return [
                'results' => 'Adicionado com sucesso'
            ];
         }else{
            return [
                'status' => 'ERROR',
                'message' => 'Ocorreu um erro ao adicionar o usuario'
            ];
         }
    }

}