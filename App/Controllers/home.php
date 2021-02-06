<?php

use App\Core\Controller;
use App\Acesso;

class Home extends Controller{

	public function index(){

		if(isset($_POST['entrar'])):
            
            if(!empty($_POST['emailLogin']) && !empty($_POST['senhaLogin'])):
			  
			  //$_POST['emailLogin'] = preg_replace('/[^[:alpha:]_]/', '',$_POST['emailLogin']);
			  //$_POST['senhaLogin'] = preg_replace('/[^[:alpha:]_]/', '',$_POST['senhaLogin']);

              $email = $_POST['emailLogin'];
              $senha = $_POST['senhaLogin'];

              $usuarioDao = $this->model('UsuariosDao');
              $mensagem[] = Acesso::login($email, $senha);

            else:

              $mensagem[] = "Preencha os campos";

            endif;

            $this->view('home/login', $dados = ['mensagem' => $mensagem]);

        endif;

		$this->view('home/login');
	}
	
	public function login(){

		

	}

	public function logout(){

		Acesso::Logout();
	}
}