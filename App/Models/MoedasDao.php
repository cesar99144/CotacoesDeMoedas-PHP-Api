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

    public function listaAdicionarMoedasFavoritas(){

    	$url = "https://economia.awesomeapi.com.br/json/all";

        $processaCurl = curl_init($url); 
        curl_setopt($processaCurl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($processaCurl, CURLOPT_SSL_VERIFYPEER, false);

        $moedas = json_decode(curl_exec($processaCurl));

        return $moedas;

    }

    public function buscarMoedaEspecifica($moeda){

    	$query = "SELECT * FROM moedas WHERE codigo = ?";
    	$stmt = self::getConn()->prepare($query);
    	$stmt->bindvalue(1, $moeda);
    	$stmt->execute();

    	if($stmt->rowCount() > 0){

    		$resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

    		$idMoeda = $resultado['id'];

    		return $idMoeda;
    	}
    }

    public function adicionarMoedaFavorita(Moedas $m){

        $query = "INSERT INTO favoritas (usuario, moeda) VALUES (?, ?)";
        $stmt = self::getConn()->prepare($query);
        $stmt->bindvalue(1, $m->getUsuario());
        $stmt->bindvalue(2, $m->getMoedaId());

        if($stmt->execute()){

        	return "Adicionado aos favoritos com sucessos";

        }else{

        	//return "Erro ao adicionar";
        	print_r($stmt->errorInfo());
        }
    }
}