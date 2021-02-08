<?php

use App\Core\Controller;
use App\Acesso;

class Moeda extends Controller{

    public function gerais(){

        $moedas = $this->model('MoedasDao');
        $dados = $moedas->cotacoesGerais();

        $this->viewDash('moedas/cotacoesGerais', $dados = ['gerais' => $dados]);
    }

    public function favoritas(){

        $this->viewDash('moedas/cotacoesFavoritas');
    }

    public function adicionarFav(){

    	$moedas = $this->model('MoedasDao');
        $dados = $moedas->listaAdicionarMoedasFavoritas();

        $this->viewDash('moedas/listaAddFav', $dados = ['listAddFav' => $dados]);
    }
}