<?php

class Sql extends PDO {
	private $conn;
	//Conexão com o BD
	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}
	//Setar vários parâmentros
	private function setParams($statement, $parameters = array()){
		foreach ($parameters as $key => $value) {
			$this->setParam($statement, $key, $value);
		}
	}
	//Setar apenas um parâmetro
	private function setParam($statement, $key, $value){
		$statement->bindParam($key, $value);
	}
	//Executar comandos no BD (Query) - Consulta
	public function query($rawQuery, $params = array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt;
	}
	//Retorno da consulta
	public function select($rawQuery, $params = array()):array{
		$stmt = $this->query($rawQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>