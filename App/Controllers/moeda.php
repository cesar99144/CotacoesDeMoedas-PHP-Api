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

    public function especificas(){

    	Acesso::checkLogin();

        $moedas = $this->model('MoedasDao');
        $dados = $moedas->cotacoesGerais();

        if(isset($_POST['codigoMoeda'])):

            $moedaBusca = $moedas->cotacoesMoedaEspecifica($_POST['codigoMoeda']);

            $this->viewDash('moedas/cotacoesEspecificas', $dados = ['todasMoedas' => $dados, 'MoedaEspecifica' => $moedaBusca]);

        endif;

    	$this->viewDash('moedas/cotacoesEspecificas', $dados = ['todasMoedas' => $dados]);
    }

    public function fechamento(){

        Acesso::checkLogin();

        $moedas = $this->model('MoedasDao');
        $dados = $moedas->cotacoesGerais();

        if(isset($_POST['codigoMoedaEspecifica'])):

            $moedaBusca = $moedas->fechamentoPorDias($_POST['codigoMoedaEspecifica'], $_POST['numeroDias']);

            $this->viewDash('moedas/fechamentoPorDias', $dados = ['todasMoedas' => $dados, 'MoedaEspecifica' => $moedaBusca]);

        endif;

        $this->viewDash('moedas/fechamentoPorDias', $dados = ['todasMoedas' => $dados]);
    }



    

}