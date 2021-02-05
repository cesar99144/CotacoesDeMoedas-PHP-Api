<?php

use App\Core\Controller;

class Usuario extends Controller{

    public function cadastro(){

        $mensagem = array();

        if(isset($_POST['nome'])):
            
            if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])):
              
              $nome = $_POST['nome'];
              $email = $_POST['email'];
              $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

              $usuario = $this->model('Usuarios');
              $usuario->setNome($nome);
              $usuario->setEmail($email);
              $usuario->setSenha($senha);

              $usuarioDao = $this->model('UsuariosDao');
              $mensagem[] = $usuarioDao->cadastrarUsuario($usuario);

            else:

              $mensagem[] = "Preencha os campos";

            endif;

            $this->view('home/cadastrar', $dados = ['mensagem' => $mensagem]);

        endif;

        $this->view('home/cadastrar');
    }
}