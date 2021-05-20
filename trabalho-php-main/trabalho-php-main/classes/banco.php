<?php 

class DB{
	public static $conexao;

	private const HOST = 'localhost';
	private const USER = 'root';
	private const SENHA = 'pernambuco';
	private const DBNOME = 'techpride';

	public static function Conexao()
	{

		try {
	    self::$conexao = new pdo('mysql:host=' . self::HOST . ';dbname=' . self::DBNOME, self::USER, self::SENHA);

		  } 
		    catch (PDOException $e) {
		    echo "Erro: Conexão com banco de dados não foi realizada com sucesso." . $e->getMessage();
		    die();
		  }

		return self::$conexao; 

	}
	public static function result($sql){
		
		$stmt = self::$conexao->prepare($sql);
		$stmt->execute();
		$select = $stmt->fetch(PDO::FETCH_ASSOC); // select array where id / fetch
		return $select;
	}
	public static function resultAll($sql){
		
		$stmt = self::$conexao->prepare($sql);
		$stmt->execute();
		$select = $stmt->fetchAll(PDO::FETCH_ASSOC); // select array where id / fetch
		return $select;
	}
	public static function insertId(){
		$sql = "select LAST_INSERT_ID()";
		$stmt = self::$conexao->prepare($sql);
		$stmt->execute();
		$select = $stmt->fetch(); // select array where id / fetch
		return $select[0];
	}
}



