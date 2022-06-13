<?php 
class Produto {	
	private $id; 
	private $nome;
	private $descr;
	private $price;
	private $pdo;

	function getId(){
		return $this->id;
	}
	function getNome(){
	 	return $this->nome;
	}
	function getDescr(){
	 	return $this->descr;
	}
	function getPrice(){
		return $this->price;
    }
	

	function setNome($nome){
		$this->nome = $nome;
	}
    function setDescr($descr){
    	$this->descr = $descr;
    }
	function setPrice($price){
    	$this->descr = $price;
    }

	function __construct(){

		$dns = "mysql:dbname=produto;host=localhost";
		$user = "root";
		$senha = "";

		try {
			$this->pdo = new PDO($dns, $user, $senha);
		} catch (Exception $e) {
			echo "Tente mais tarde!!";
			
		}
	}

	function addProd($nome, $descr, $price){
		$cmd = "INSERT INTO produtos SET nome = :n, descr = :d, price = :p";
		$cmd = $this->pdo->prepare($cmd);

		$cmd->bindValue(':n', $nome);
		$cmd->bindValue(':d', $descr);
		$cmd->bindValue(':p', $price);

		$flag = $cmd->execute();

		if ($flag) {
			echo "Registro incluido com sucesso!";
		} else {
			echo "Não consegui registrá-lo! Tente novamente mais tarde!";
		}		
	}

	function altProd($id, $nome, $descr, $price){
		$cmd = "UPDATE produtos SET nome = :n, descr = :d, price = :p WHERE id = :i;";
		$cmd = $this->pdo->prepare($cmd);

		$cmd->bindValue(':i', $id);
		$cmd->bindValue(':n', $nome);
		$cmd->bindValue(':d', $descr);
		$cmd->bindValue(':p', $price);

		$flag = $cmd->execute();

		if ($flag) {
			echo "Registro alterado com sucesso!";
		} else {
			echo "Não consegui alterá-lo! Tente novamente mais tarde!";
		}		
	}

	function delProd($id){
		$cmd = "DELETE FROM produtos WHERE id = :i";
		$cmd = $this->pdo->prepare($cmd);

		$cmd->bindValue(':i', $id);

		$flag = $cmd->execute();

		if ($flag) {
			echo "Produto deletado com sucesso!";
		} else {
			echo "Não consegui deletá-lo! Tente novamente mais tarde!";
		}		
	}
	
}








