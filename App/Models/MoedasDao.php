<?php

use App\Core\Model;

class MoedasDao extends Model{

    public function cotacoesGerais(){

        $url = "https://economia.awesomeapi.com.br/json/all";

        $processaCurl = curl_init($url); 
        curl_setopt($processaCurl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($processaCurl, CURLOPT_SSL_VERIFYPEER, false);

        $moedas = json_decode(curl_exec($processaCurl));

        return $moedas;
    }

    public function cotacoesMoedaEspecifica($moeda){

        $url = "https://economia.awesomeapi.com.br/all/".$moeda;

        $processaCurl = curl_init($url);
        curl_setopt($processaCurl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($processaCurl, CURLOPT_SSL_VERIFYPEER, false);

        $moeda = json_decode(curl_exec($processaCurl));

        return $moeda;
        
    }

}