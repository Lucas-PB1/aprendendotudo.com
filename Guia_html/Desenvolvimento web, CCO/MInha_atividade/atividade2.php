<!DOCTYPE html>
<html>
<head>
	<title>Número 2</title>
</head>
<body>
	<?php 
	$MyArchive = fopen('texto2.txt','a+');
	if ($MyArchive== true )
		echo "Arquivo criado";
	else
		die('Não foi possivel criar o arquivo');
	?>
	<div>
		<form method="POST">
			<input placeholder="Escreva aqui os nomes" type="string"  name="texto2">
			<input type="submit">
		</form>

		<?php 
		if ($_SERVER["REQUEST_METHOD"]=="POST")
			$texto = $_REQUEST['texto2'];
		fwrite($MyArchive, $texto."\n");
		$line =file("texto2.txt");
			echo $line[0]."<br>";
			echo $line[1]."<br>";
			echo $line[2]."<br>";
			echo $line[3]."<br>";
			echo $line[4]."<br>";
		fclose($MyArchive);
		?>
	</div>
</body>
</html>