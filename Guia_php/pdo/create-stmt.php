<?php
include './connect.php';

$conn = getConnection();

/*
$sql = "INSERT INTO users (nome, email, senha) VALUES (?,?,?)";

$nome = "edna santiago da silva";
$email = "ednasantiagonet@gmail.com";
$senha = "senha4";

$stmt = $conn -> prepare($sql);
$stmt -> bindParam(1, $nome);
$stmt -> bindParam(2, $email);
$stmt -> bindParam(3, $senha);
*/

$sql = "INSERT INTO users (nome, email, senha) VALUES (:nome,:email,:senha)";

$nome = "luciano santiago da silva";
$email = "lucianosantiagonet@gmail.com";
$senha = "senha5";

$stmt = $conn -> prepare($sql);
$stmt -> bindParam(":nome", $nome);
$stmt -> bindParam(":email", $email);
$stmt -> bindParam(":senha", $senha);

if ($stmt->execute()) {
	echo "Salvo com sucesso";
}else {
	echo "Erro ao salvar";
}