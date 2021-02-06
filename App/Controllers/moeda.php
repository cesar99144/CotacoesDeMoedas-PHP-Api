<?php

use App\Core\Controller;
use App\Acesso;

class Moeda extends Controller{

    public function gerais(){

        $this->viewDash('moedas/cotacoesGerais');
    }

    public function favoritas(){

        $this->viewDash('moedas/cotacoesFavoritas');
    }
}