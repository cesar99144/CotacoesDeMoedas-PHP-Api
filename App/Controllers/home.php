<?php

use App\Core\Controller;

class Home extends Controller{

	public function index(){

		$this->view('home/login');
	}
	
	public function cadastrar(){

		$this->view('home/cadastrar');
	}
}