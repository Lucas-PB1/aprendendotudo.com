<title>Função php</title>
<?php 

$n1=$_REQUEST['n1'];
$n2=$_REQUEST['n2'];
$n3=$_REQUEST['n3'];
$n4=$_REQUEST['n4'];
$n5=$_REQUEST['n5'];

$arquivo = fopen("arquivo.txt","w");

if ($arquivo==true) {
	echo "Criado: <br>";
}else{
	die("Falha");
}

fwrite($arquivo,"$n1\n$n2\n$n3\n$n4\n$n5");

echo "Primeiro nome: $n1<br>";
echo "Segundo nome: $n2<br>";
echo "Terceiro nome: $n3<br>";
echo "Quarto nome: $n4<br>";
echo "Quinto nome: $n5<br>";

fclose($arquivo);
//setcookie("usuario","Maria",time()+tempo em segundos) Dados que sãp salvos por determinado tempo
//$_COOKIE["usuario"];
//setcookie("usuario","Maria",time()+tempo em segundos negativos), excluindo
 //Sobrescrever
//$setcookie("usuario");
?>

