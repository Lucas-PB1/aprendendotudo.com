<?php
/**
*
*@return \PDO
*/
function getConnection(){
	$dsn = "mysql:host=localhost;dbname=pdo_teste;charset=utf8";
	$user = "root";
	$password = "";

	try {
		$pdo = new PDO($dsn, $user , $password);
		echo "pegou";
		return $pdo;
	} catch (PDOException $ex) {
		echo "Erro: ".$ex->getMessage();
	}
}