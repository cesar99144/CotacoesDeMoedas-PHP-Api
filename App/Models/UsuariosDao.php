<?php

use App\Core\Model;

class UsuariosDao extends Model{

    public function cadastrarUsuario(Usuarios $u){

        $query = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = self::getConn()->prepare($query);
        $stmt->bindValue(1, $u->getNome());
        $stmt->bindValue(2, $u->getEmail());
        $stmt->bindValue(3, $u->getSenha());

        if($stmt->execute()):
           
            return "Cadastrado com sucesso";
        
        else:

            return "Erro ao cadastrar";
            
        endif;
    }
}