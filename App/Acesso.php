<?php

namespace App;

use App\Core\Model;

class Acesso{

    public static function login($email, $senha){

        $query = "SELECT * FROM usuario WHERE email = ?";
     	$stmt = Model::getConn()->prepare($query);
     	$stmt->bindValue(1, $email);
        $stmt->execute();
         
        if($stmt->rowCount() >= 1):
     	   
     	   $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

           if(password_verify($senha, $resultado['senha'])):

           	  $_SESSION['logado'] = true;
           	  $_SESSION['userId'] = $resultado['id'];
           	  $_SESSION['userNome'] = $resultado['nome'];
              
           	  header('Location: /usuario/dashboard');
           else:
           	  return "Senha invalida";
           endif;

     	else:
     	  return "Email não encontrado";
     	endif;
    }

    public static function checkLogin(){

        if(!isset($_SESSION['logado'])):

           header('Location: /home/index');
           die;

        endif;

    }

    public static function Logout(){

        session_destroy();
        header('Location: /home/index');

    }

}