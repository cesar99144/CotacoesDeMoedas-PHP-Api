<?php

use App\Core\Controller;
use App\Acesso;

class Moeda extends Controller{

    public function gerais(){

    	Acesso::checkLogin();

        $moedas = $this->model('MoedasDao');
        $dados = $moedas->cotacoesGerais();

        $this->viewDash('moedas/cotacoesGerais', $dados = ['gerais' => $dados]);
    }

    public function favoritas(){

    	Acesso::checkLogin();

        $this->viewDash('moedas/cotacoesFavoritas');
    }

    public function listaAdicionarFav(){

    	Acesso::checkLogin();

    	$moedas = $this->model('MoedasDao');
        $dados = $moedas->listaAdicionarMoedasFavoritas();

        $this->viewDash('moedas/listaAddFav', $dados = ['listAddFav' => $dados]);
    }

    public function adicionarFav($moeda){

    	Acesso::checkLogin();

    	$mensagem = array();

    	$MoedasDao = $this->model('MoedasDao');

    	$buscaIdMoeda = $MoedasDao->buscarMoedaEspecifica($moeda);

    	$moeda = $this->model('Moedas');
    	$moeda->setUsuario($_SESSION['userId']);
    	$moeda->setMoedaId($buscaIdMoeda);

    	$mensagem[] = $MoedasDao->adicionarMoedaFavorita($moeda);
    	
    	//Carregar informações das moedas

        $dados = $MoedasDao->listaAdicionarMoedasFavoritas();

    	$this->viewDash('moedas/listaAddFav', $dados = ['listAddFav' => $dados, 'mensagem' => $mensagem]);
    }
}