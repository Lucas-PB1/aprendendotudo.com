<!DOCTYPE html>
<html>
<head>
	<title>Número 3</title>
</head>
<form method="POST">
	<input type="number" placeholder="Insira o valor" name="investimento">
	<select name="op">
		<option value="vazio">Selecione uma opção</option>
		<option value="Poupança">Poupança</option>
		<option value="Renda_fixa">Fundos de renda fixa</option>
	</select>
	<input type="submit">
</form>
<body>

	<?php

	if ($_SERVER["REQUEST_METHOD"]=="POST")
		$number = $_REQUEST['investimento'];
	$op = $_REQUEST['op'];
	switch ($op) {

		case 'vazio':
		echo "<br>Vc esqueceu de selecionar um opção";
		break;

		case 'Poupança':
		$valor = $number+($number*0.3);
		echo "<br>O valor do lucro com investimento em poupança é: $valor";
		break;

		case 'Renda_fixa':
		$valor = $number+($number*0.4);
		echo "<br>O valor de lucro com uso de dos fundo de renda fixa são: $valor";
		break;

		default:
		echo "<br>Erro, nada encontrado";
		break;
	}
	?>
</body>
</html>
