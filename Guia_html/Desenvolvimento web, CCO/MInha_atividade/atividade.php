<!DOCTYPE html>
<html>
<head>
	<title>Número 1</title>
</head>
<body>
	<?php
	$MyArchive = fopen('texto.txt','a+');
	if ($MyArchive== true )
		echo "Arquivo criado";
	else
		die('Não foi possivel criar o arquivo');
	?>
	<div>
		<form method="POST">
			<input placeholder="Escreva aqui a frase que deseja inserir" type="string"  name="texto">
			<input type="submit">
		</form>

		<?php 
		if ($_SERVER["REQUEST_METHOD"]=="POST")
			$texto = $_REQUEST['texto'];
		fwrite($MyArchive, $texto."\n");
		$line =file("texto.txt");
			echo $line[0]."<br>";
			echo $line[1]."<br>";
			echo $line[2]."<br>";
		fclose($MyArchive);
		?>
	</div>
</body>
</html>