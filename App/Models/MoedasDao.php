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

    public function listaOpcoesMoedas(){

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

    public function listaDeTodasMoedas(){

        $query = "SELECT * FROM moedas";
        $stmt = self::getConn()->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $resultado;
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

    public function buscaFavoritasUsuario($id){

        //$query = "SELECT moeda FROM favoritas where usuario = ?";
        $query = "SELECT moedas.codigo, moedas.nome FROM favoritas JOIN moedas on moedas.id = favoritas.moeda WHERE favoritas.usuario = ?";
        $stmt = self::getConn()->prepare($query);
        $stmt->bindvalue(1, $id);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $resultado;

        }else{

            return [];
        }
    }
}