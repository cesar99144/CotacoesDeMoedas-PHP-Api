<?php

use App\Core\Model;

class MoedasDao extends Model{

    //Busca na api cotações do dia de todas as moedas disponiveis
    public function cotacoesGerais(){

        $url = "https://economia.awesomeapi.com.br/json/all";

        $processaCurl = curl_init($url); 
        curl_setopt($processaCurl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($processaCurl, CURLOPT_SSL_VERIFYPEER, false);

        $moedas = json_decode(curl_exec($processaCurl));

        return $moedas;
    }

    //Busca na api cotações apenas de uma moeda especificada pelo usuário
    public function cotacoesMoedaEspecifica($moeda){

        $url = "https://economia.awesomeapi.com.br/all/".$moeda;

        $processaCurl = curl_init($url);
        curl_setopt($processaCurl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($processaCurl, CURLOPT_SSL_VERIFYPEER, false);

        $moeda = json_decode(curl_exec($processaCurl));

        return $moeda;
        
    }

    //Buscar cotações de moeda especifica de quantidade de dias especificos
    public function fechamentoPorDias($moedas, $intervaloDias){

        $url = "https://economia.awesomeapi.com.br/json/daily/".$moedas."/".$intervaloDias;

        $processaCurl = curl_init($url);
        curl_setopt($processaCurl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($processaCurl, CURLOPT_SSL_VERIFYPEER, false);

        $moeda = json_decode(curl_exec($processaCurl));

        return $moeda;
    }

    //buscar dados com base em intervalo de dias
    public function fechamentoComecoEFim($moeda, $comeco, $fim){

        $url = "https://economia.awesomeapi.com.br/json/daily/".$moeda."/?start_date=".$comeco."&end_date=".$fim;
        
        $processaCurl = curl_init($url);
        curl_setopt($processaCurl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($processaCurl, CURLOPT_SSL_VERIFYPEER, false);

        $moeda = json_decode(curl_exec($processaCurl));

        return $moeda;
    }

}