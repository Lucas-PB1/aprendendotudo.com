<?php
include './connect.php';

$conn = getConnection();

$sql = "INSERT INTO users (nome, email, senha) VALUES ('user-teste','email-teste@gmail.com','senha-teste')";

if ($conn -> exec($sql)) {
	echo "Salvo com sucesso";
}else{
	echo "Erro ao salvar";
}