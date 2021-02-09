<?php

use App\Core\Controller;
use App\Acesso;

class Moedas extends Controller{

	private $usuario, $moedaId;

	public function getUsuario(){

		return $this->usuario;
	}

	public function setUsuario($u){

		$this->usuario = $u;
	}

	public function getMoedaId(){

		return $this->moedaId;
	}

	public function setMoedaId($mi){

		$this->moedaId = $mi;
	}
}