<!DOCTYPE html>
<html>
<head>
	<title>Upload 2</title>
</head>
<body>

	<?php
	if (isset($_POST['Enviar'])){

		$formatos = array('jpeg' , 'gif', 'jpg' , 'png' );

		//Dados contidos na variavel files:
		/*
		array(1) { 
		["img"]=> array(5) { 
			["name"]=> string(36) "NOME DO ARQUIVO.jpeg" 
			["type"]=> string(10) "TIPO DO ARQUIVO" 
			["tmp_name"]=> string(24) "CAMINHO TEMPORARIO DO ARQUIVO.tmp" 
			["error"]=> int(0) CODIGO DE ERRO
			["size"]=> int(TAMANHO DO ARQUIVO) 
			} 
		} 
		*/
		//var_dump($_FILES);

		$extensao = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);

		//a extensão
		//var_dump($extensao)

		if (!in_array($extensao, $formatos)):
			echo "<center> O formato do arquivo esta incorreto </center>";
			exit;
		endif;
		$pasta = "img/";
		$temp = $_FILES['img']['tmp_name'];
		$newname = uniqid().".$extensao";

		if (move_uploaded_file($temp, $pasta.$newname)){
			echo "<center> Arquivo enviado </center>";
		}else{
			echo "<center> Não foi possivel salvar o arquivo </center>";
		}
	}else{
		echo "<center> Arquivo não selecionado </center>";
	}
	?>
	<center>
		<h1>Upload</h1>
		<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<br>
			<input type="file" name="img">
			<br><br>
			<input type="submit" name="Enviar">
		</form>
	</center>
</body>
</html>