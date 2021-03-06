<!DOCTYPE html>
<html>
<head>
	<title>Tutorial de Java Script</title>
	<meta charset="utf-8">
	<!-- Chamando script -->
	<script type="text/javascript" src="javaSc.js"></script>
</head>
<body>
	<h1>Java Script</h1>
	<?php  ?>
	<h1 style="text-align: center">Java Script</h1>
	<div>
		<!-- Java script pode alterar elementos em html -->
		<p id="Teste">Troca com java script</p>
		<button type="button" onclick='document.getElementById("Teste").innerHTML = "TROCADO COM JAVA SCRIPT"'>clique para trocar</button>
	</div>
	<div>
		<!-- Varios do elementos em HTML podem ser manipulados -->
		<img id="front_right" src="img/person_run_right.gif" width="100px" height="100px"><br>
		<button type="button" onclick='document.getElementById("front_right").src="img/person_run_front.gif"'>Corra pra a frente</button>
		<button type="button" onclick='document.getElementById("front_right").src="img/person_run_right.gif"'>Corra pra a frente</button>
	</div>
	<div>
		<img id="stop_run" src="img/parado.gif" width="100px" height="100px"><br>
		<button type="button" onclick='document.getElementById("stop_run").src="img/andando.gif"'>Ande</button>
		<button type="button" onclick='document.getElementById("stop_run").src="img/parado.gif"'>Fique parado</button>
	</div>
	<br>
	<div>
		<!-- Elementos em HTML podem ser ocultado e chamado de volta usando display -->
		<p id="sumir">Me faça sumir</p>
		<button type="button" onclick='document.getElementById("sumir").style.display="none"'>Faça a frase de cima sumir</button><br>
		<button type="button" onclick='document.getElementById("sumir").style.display="block"'>Reapareça e se mova pra cima</button><br>
		<button type="button" onclick='document.getElementById("sumir").style.display="contents"'>Reapareça e se mova esquerda</button>
	</div>

	<div>
		<!-- Geralmente o javascript é descrito dentro da tag <script> -->
			<script type="text/javascript">
				document.getElementById("nome").innerHTML="Lucas";
			</script>
		</div>

		<div>
			<!-- Aplicação de um script -->
			<p id="nome">Random name</p>
			<button type="button" onclick="TrocaNome();">Set "Lucas" como nome</button>
		</div>

	<!--
		Escrevendo em um elemento HTML, usando innerHTML.
		Escrevendo na saída HTML usando document.write().
		Escrevendo em uma caixa de alerta, usando window.alert().
		Escrevendo no console do navegador, usando console.log().
	-->
	<div>
		<!-- Inner element, define um elemento no html -->
		<p id="Inner"><p>
			<button type="button" onclick="exibir();">Exiba resulta de 5+5: </button>
		</div>
		<div>
		<!-- document.write, cria uma saída no hmtl 
		Se document.write for acionado após o 
		carregamento da página toda ela será 
		sobreescrita-->
		<script type="text/javascript">
			//document.write(5+5);
		</script>
	</div>
	<div>
		<!-- window.alert, chama um pequena caixa de aviso no topo do site -->
		<button type="button" onclick="alerta();">Janela de teste</button>
		<!-- window.alert, chama um pequena caixa de aviso no topo do site, sem referencia -->
		<button type="button" onclick="alerta2();">Janela de teste 2</button>
	</div>
	<br>
	<div>
		<!-- console log é um metodo de printar algo no debug com fim de exibir dados -->
		<p>Abra o menu de debug e clique em console, logo após clique nesse botão:</p>
		<button type="button" onclick="consolelog();">Console log</button>
	</div>
	<br>
	<div>
		<!-- window print, o comando que imprimi uma página -->
		<button type="button" onclick="imprimir();">imprimir</button>
	</div>
	<div>
		<!-- Variaveis nas funcões -->
		<p id="some"></p>
		<button type="button" onclick="soma();">resultado</button>
	</div>
	<!-- 
	typeof, retorna o tipo da varivel 
	instanceof, retorna o tipo do objeto 
	** é para expoentes 
	Em java script variaveis sem valor são conhecidas como undefined
	This, a palavra this faz referencia ao contéudo do objeto referenciado
	-->
	
	<div>
		<!-- Teste de objetos -->
		<p id="teste">O pai e a mãe são</p>
		<button type="button" onclick="object();">Clique</button>
		<script type="text/javascript">
			function object(){
				var familia = {
					Pai: "Luciano",
					Mae : "Edna"
				};
				document.getElementById("teste").innerHTML = familia["Pai"] + " e  " + familia["Mae"];
			}
		</script>
	</div>
	<div><br>
		<!-- função de trocar -->
		<script>
			var op = true;
			var palavra;
			function trocar(){
				if (op == true) {
					palavra ="ocultar";
					op = false;
					return palavra;
				}else{
					palavra = "mostra";
					op=true;
					return palavra;
				}
			}
		</script>
		<button onclick='this.innerHTML = trocar();'>mostrar</button>
	</div>
	<div>
		<p id="txt"></p>
		<!-- lendo o tamanho de uma string -->
		<button type="button" onclick="contagem();">Tamanho</button>
	</div>
	<div>
		<!-- lendo a posição de uma string, com indexOf -->
		<p id="txt2"></p>
		<button type="button" onclick="primeira();">Primeira Posição</button>
		<p id="txt3"></p>
		<button type="button" onclick="ultima();">Ultima Posição</button>
		<p id="txt4"></p>
		<button type="button" onclick="pesquisa_pos();">Pesquisa 10</button>
		<!-- -1 será retornado se o texto não for encontrado -->
		<!-- lendo a posição de uma string, com search -->
		<p id="texto"></p>
		<button type="button" onclick="search();">Pesquisar, com search</button>
		<!-- A principal diferença de search para indexOf, que indexOf suporta mais de um
		parametro, mas não suporta metodos de pesquisa avançada, ja search suporta no entanto
		não suporta um segundo parametro -->
		<!-- Metodos de corte, slice, vc so precisa marcar o inicio e o fim -->
		<p id="newtexto"></p>
		<button type="button" onclick="slice()">Metodo slice</button>
		<!-- Slice pega a posição inicial e posição final e corta o texto, se o parametro for negativo o resultado será contado do fim até o inicio, se vc omitir um parametro a partir do ponto de indicado o resto será cortado -->
		<!-- O metodo substring é semelhante ao slice, no entanto não suporta indices negativos -->
		<!-- O metodo de substr, é semelhante aos demais com uma unica diferença, o segundo parametro definira o tamanho da string a ser selecionado a partir do primeiro parametro-->
		<!-- Metodo replace -->
		<p id="othertext"></p>
		<button type="button" onclick="replace();">Metodo replace</button>
		<!-- Metodo concat -->
		<p id="nome_completo"></p>
		<button type="button" onclick="concat();">Metodo concat</button>
		<!-- Metodo trim -->
		<p id="metodo_trim"></p>
		<button type="button" onclick="trim();">Metodo trim</button>
		<!-- Metodo chart -->
		<p id="metodo_charAt"></p>
		<button type="button" onclick="charAt();">Metodo charAt</button>
		<!-- O metodo charCodeAt, retorna o unicode utf-16, da referencia passada -->
		<!-- Metodo split, convertendo string em matriz -->
		<p id="name"></p>
		<button type="button" onclick="split();">Metodo split</button>
	</div>
	<div>
		<!-- NaN indica que vc tentou fazer um calculo não valido -->
		<!-- função isNaN -->
		<h6>Função isNan e tipo infinity</h6>
		<p id="F"></p>
		<h5>Função toString</h5>
		<p id="G"></p>
		<h4>Função</h4>
		<p id="H"></p>
		<p id="I"></p>
		<p id="J"></p>
		<script>
			var N1 = 1.242;
			var T1 = "um";
			var F1 =isNaN(N1);
			var F2 =isNaN(T1);
			//infinity o tipo infinity, será exibido quando o calculo feito superar os números suportados
			var test = Infinity;
			document.getElementById("F").innerHTML = F1 +" "+ F2 +" "+ test;
			var _F1 =N1.toString();
			//O valor retornado será uma string
			document.getElementById("G").innerHTML = typeof(_F1);
			//toExponential retorna uma string, com um número arredondado e gravado usando notação exponencial. Um parâmetro define o número de caracteres atrás do ponto decimal:
			var _F2 = N1.toExponential(2);
			document.getElementById("H").innerHTML = _F2;
			//toFixed, retorna um número com determinado número de casas decimais partindo de um parametrô
			//toFixed(2) é perfeito para trabalhar com dinheiro.
			var _F3 = N1.toFixed(2);
			document.getElementById("I").innerHTML = _F3;
			//toPrecision() retorna uma string, com um número escrito com um comprimento especificado
			var _F4 = N1.toPrecision(1);
			document.getElementById("J").innerHTML = _F4;
		</script>
	</div>
	<div>
		<!-- Metodo de conversão com "Number" -->
		<script>
			function number(){
				var myn1 = "Lucas";
				var myn2 = false;
				var myn3 = "123.41";
				var date = new Date("2020-05-18");

				var newn1 = Number(myn1);
				var newn2 = Number(myn2);
				var newn3 = Number(myn3);
				var newn4 = Number(date);

				document.getElementById("myn").innerHTML = "Lucas: "+ newn1 +"<br>"+ "Boleano: " + newn2 + "<br>" + "numero decimal: " + newn3 + "<br>" + "Data: " + newn4;
				//O Number(date) acima retorna o número de milissegundos desde 1.1.1970.
			} 
		</script>
		<button onclick="number();">Number</button>
		<p id="myn"></p>
	</div>
	<div>
		<!-- Metodo de conversão com "parsInt" -->
		<!-- O metodo de parsInt, transforma o elementos em números inteiros, ele aceita espaços no entanto so pega o primeiro número definido -->
		<script>
			function ParseInt(){
				var myi1 = "12.30";
				var myi2 = "12 13 14";
				var myi3 = "time 10";
				var myi4 = "10 time";

				newi1 = parseInt(myi1);
				newi2 = parseInt(myi2);
				newi3 = parseInt(myi3);
				newi4 = parseInt(myi4);

				document.getElementById("myi").innerHTML = "Decimal: "+ newi1 +"<br>"+ "Números separados: " + newi2 + "<br>" + "Time 10: " + newi3 + "<br>" + "10 time: " + newi4;
			}
			//O metodo parseFloat, funciona da mesma forma com a mudança que ele preserva as casas decimais
		</script>
		<button onclick="ParseInt();">Parse Float</button>
		<p id="myi"></p>
	</div>
	<div>
		<script>
			function test_type(){
				var max = Number.MAX_VALUE;
				var min = Number.MIN_VALUE;
				var pos_inf = Number.POSITIVE_INFINITY;
				var neg_inf = Number.NEGATIVE_INFINITY;
				var _NaN = Number.NaN;

				document.getElementById("type").innerHTML = "MAX_VALUE: "+ max +"<br>"+ "MIN_VALUE: " + min + "<br>" + "POSITIVE_INFINITY: " + pos_inf + "<br>" + "NEGATIVE_INFINITY: " + neg_inf + "<br>" + "NaN: " + _NaN;
			}
		</script>
		<button onclick="test_type();">test_type</button>
		<p id="type"></p>
	</div>
	<div>
		<!-- Vetores -->
		<script>
			//declaração de vetores
			var myvetor = ["lucas","luciano","edna","joão","samuel"];
			function test_vetor(){
				document.getElementById("vetor_test").innerHTML = Array.isArray(myvetor);		
			}
			function instance_of(){
				var test = myvetor instanceof Array;
				document.getElementById("instanceof").innerHTML = test;
			}
			function add(){
				myvetor.push("novo elemento");
			}
			//Exibição de vetores
			function vetor(){
				//marcação de lista
				var text = "<ul>";
				//metodo for each
				myvetor.forEach(exiba);
				//marcação de lista
				text += "</ul>";
				var tmh = myvetor.length;
				//Função de exibir
				function exiba(value){
					text += "<li>" + value + "</li>"; 
				}
				document.getElementById("vetor").innerHTML = "Vetor: "+text+"<br>"+"Tamanho: " +tmh;
			}
		</script>
		<!-- O primeiro botão vai chamar a matriz atual -->
		<button onclick="vetor();">Vetor</button>
		<p id="vetor"></p>
		<!-- AO ADICIONAR UM ELEMENTO A MATRIZ O BOTÃO DE EXIBIÇÃO DEVE SER CLICADO NOVAMENTE -->
		<button onclick="add();">Mais um elemento</button>
		<!-- Metodo de verificação -->
		<!-- Função isArray, feita manualmente
			function isArray(x) {
  			return x.constructor.toString().indexOf("Array") > -1;
		}-->
		<br><br>
		<button onclick="test_vetor();">É um vetor?</button>
		<p id="vetor_test"></p>
		<!-- Usando instanceof -->
		<button onclick="instance_of();">"É um vetor?", com instanceof</button>
		<p id="instanceof"></p>
	</div>
	<div>
		<script>
			var vetor = ["thiago","davi","guillerme"];
			var vetor_to = toString(vetor);
		</script>
	</div>
	
	<h2>Manipulação de matrizes</h2>
	<div>
		<script>
			//função join
			function join(){
				var vetor = ["lucas", "Sal","Guillerme"];
				//Observe que no join vc pode definir o separador
				document.getElementById("vetor_join").innerHTML = vetor.join("|");
			}
		</script>
		<button onclick="join();">JOIN</button>
		<p id="vetor_join"></p>
	</div>
	<div>
		<script>
		//Metodos de manipulação de vetores
		var new_vetor = ["Lucas","Silvio","Gean"];
		var new_vetor2 = ["new Lucas","new Silvio", "new Gean"];
		//Pop remove o ultimo valor
		function pop(){
			new_vetor.pop();
			document.getElementById("vetor_pop/push").innerHTML = new_vetor;
		}
		//Push adiciona na ultima posição
		function push(){
			new_vetor.push("Novo");
			document.getElementById("vetor_pop/push").innerHTML = new_vetor;
		}
		//Shift retira o primeiro valor da matriz
		function shift(){
			new_vetor.shift();
			document.getElementById("vetor_pop/push").innerHTML = new_vetor;
		}
		//Unshift adiciona um novo primeiro elemento a matriz
		function unshift(){
			new_vetor.unshift("Novo primeiro valor");
			document.getElementById("vetor_pop/push").innerHTML = new_vetor;
		}
		function _delete(){
			delete new_vetor[1];
			document.getElementById("vetor_pop/push").innerHTML =  new_vetor;
		}
		//A função splice adiciona elementos a um vetor, o primeito parametro define a posição e o segundo indica quantos elemento devems ser excluidos de um vetor se os valores a serem adicionados fora ignorados o metoto tb remover valores da matriz sem deixar buracos na mesma
		function splice(){
			new_vetor.splice(2,1,"Pedro","Samuel");
			document.getElementById("vetor_pop/push").innerHTML = new_vetor;
		}
		//O metodo concat vai juntar duas matrizes(vetores)
		function concat(){
			var concat_vetor = new_vetor.concat(new_vetor2);
			document.getElementById("vetor_concat").innerHTML = concat_vetor;
		}
		//o comando slice corta um vetor, o paramentro indica a posição que deve ser cortada do inicio ao fim
		function slice(){
			var vetor_slice = new_vetor.slice(0,1);
			document.getElementById("vetor_slice").innerHTML = vetor_slice;
		}
		</script>
		<!-- Será exibido a matriz sem o ultimo valor -->
		<button onclick="pop();">POP</button><br>
		<!-- Será exibido a matriz com um novo valor no final-->
		<button onclick="push();">PUSH</button><br>
		<!-- Será retirado o primeiro valor da matriz -->
		<button onclick="shift();">SHIFT</button><br>
		<!-- Será adicionado um novo primeiro valor para a matriz os demais valores serão "desviados"-->
		<button onclick="unshift();">UNSHIFT</button><br>
		<!-- Uso do comando delete tornara um elemento em undefined -->
		<button onclick="_delete();">DELETE</button><br>
		<!-- O comando splice, adiciona um ou mais elementos na posição desejada -->
		<button onclick="splice();">SPLICE</button><br>
		<!-- Chamada de substituição -->
		<p id="vetor_pop/push"></p>
		<!-- comando de concatenação -->
		<h4>Vetor concatenado</h4>
		<button onclick="concat();">CONCAT</button>
		<p id="vetor_concat"></p>
		<!-- comando de corte, slice-->
		<h4>Vetor cortado</h4>
		<button onclick="slice();">SLICE</button>
		<p id="vetor_slice"></p>
		<!-- Vale dizer que o comando toString é feito de maneira automatica para matrizes deixando sua utilização ou não nula -->
	</div>
	<div>
		<script>
			var new_array = ["zeus", "athena","npc"];
			//Metodo sort array, ele organiza o vetor por ordem alfabetica
			function sort(){
				new_array.sort();
				document.getElementById("array").innerHTML = new_array;
			}
		</script>
		<h4>Vetor organizado com sort</h4>
		<!-- O sort organiza em ordem alfabetica -->
		<button onclick="sort();">SORT</button>
		<p id="array"></p>
	</div>
	<div>
		<p id="first"></p>
		<!-- A função reverse inverte todas as posições de um array -->
		<button onclick="reverse();">Reverse</button>
		<script>
			var the_array = [1,2,3,4,5];
			function reverse(){
				the_array.reverse();
				document.getElementById("first").innerHTML = the_array;
			}
		</script>
	</div>
	<div>
		<p id="second"></p>
		<button onclick="correct_sort();">sort_correct</button>
		<script>
			var one = [1,3,5,25,100,2020];
			//Quando se trata de matrizes a function sort apenas avaliara o primeiro número de forma que 1 seja igual a 100, existe um truque para corrigir essa questão.
			one.sort();
			document.getElementById("second").innerHTML = one;
			function correct_sort(){
				one.sort(function(a, b){return a - b});
				document.getElementById("second").innerHTML = one;
			}
			//Para inverter vc deve usar o mesmo truque, trocando as posições de a e b.
		</script>
	</div>
	<div>
		<script>
			//Explicação da função compare, ela realiza o seguinte processo
			//one.sort(function(a, b){return a - b}), ele compara elemento a com b, exemplo se elemento a for 40 e elemento b 100, ele retorna uma subtração que é a-b, que no nosso caso seria -60, se resultado for negativo nada acontece mas se for positivo ocorre uma ação o programa detecta quem é o menos valor a ou b por que se a for maior que b a logica é que A possui valo maior B então sobra elementos, mas se o resultado for negativo logo A é menor que B pois não possui elementos o suficiente para superar B em valores.
		</script>
	</div>
	<div>
		<p id="third"></p>
		<button onclick="random();">Random</button>
		<script>
			//Função random ou math.random
			var two = [1,2,3,4,5];
			document.getElementById("third").innerHTML = two;
			function random(){
				two.sort(function(a,b){return 0.5 - Math.random()});
				document.getElementById("third").innerHTML = two;
			}
		</script>
	</div>
	<div>
		<p id="fourth"></p>
		<script>
			//Como ler o menor valor de uma matriz
			//É de fato um metodo simples, basta ordenar a matriz e pegar o valor casa "0"
			var three = [20,10,5,50,200];
			three.sort(function(a,b){return a - b});
			document.getElementById("fourth").innerHTML = "O menor valor na matriz é: " + three[0];
		</script>
	</div>
	<div>
		<p id="fifth"></p>
		<script>
			//Fazer o inverso
			var three = [20,10,5,50,200];
			three.sort(function(a,b){return b - a});
			document.getElementById("fifth").innerHTML = "O maior valor na matriz é: " + three[0];
		</script>
	</div>
	<div>
		<p id="sixth"></p>
		<script>
			//Pegando o maior elemento de uma matriz com mathmax
			var four = [20,10,30,40,35];
			function mathmax(four){
				return Math.max.apply(null,four);
			}
			document.getElementById("sixth").innerHTML = "O maior valor da matriz é: " + mathmax(four);
		</script>
	</div>
	<div>
		<p id="seventh"></p>
		<script>
			//Pegando o maior elemento de uma matriz com mathmax
			var four = [20,10,30,40,35];
			function mathmin(four){
				return Math.min.apply(null,four);
			}
			document.getElementById("seventh").innerHTML = "O menor valor da matriz é: " + mathmin(four);
		</script>
	</div>
	<div>
		<p id="eighth"></p>
		<button onclick="compare_string();">Mostre</button>
		<script>
			//Função de comparar strings
			//declaração de array, todos o valores dentro são objetos com nome e data de nascimento
			var humans = [
			{birth_year:2020, name:"Lucas"},
			{birth_year:2008, name:"Samuel"},
			{birth_year:2005, name:"João"}
			];
			//Essa função e a responsavel por comparar a Strings
			function compare_string() {
				//Aqui usamos a função compare
				humans.sort(function(a, b){
					//Transfomamos todos para letra minuscula
					var x = a.name.toLowerCase();
					var y = b.name.toLowerCase();
					//Aqui se y for maior que x retorna falso
					if (x < y) {return -1;}
					//Aqui se y for menor que x retorna verdadeiro
					if (x > y) {return 1;}
					return 0;
				});
				mostrar();
			}

			function mostrar(){
				//Na função de exibição o valores de fato substituem o objeto do id, valer dizer que se a matriz for chamada ela necessitara da função tostring para exibir corretamente
				document.getElementById("eighth").innerHTML = 
				humans[0].name + " nasceu em: " + humans[0].birth_year + "<br>" +
				humans[1].name + " nasceu em: " + humans[1].birth_year + "<br>" +
				humans[2].name + " nasceu em: " + humans[2].birth_year;
			}
		</script>
	</div>
	<div>
		<p id="demo"></p>
		<script>
			//Função foreach, que no javaSc tem como função fazer uma seleção para cada item da matriz
			//Varivel que vai armazenar o resultado do for each
			var txt = "";
			var numbers = [45, 4, 9, 16, 25];
			//realizando o for each usando como padrão a função
			numbers.forEach(myFunction);
			document.getElementById("demo").innerHTML = txt;
			//Função que marca as linhas recebe os valores e os repassa em linhas separadas
			function myFunction(value) {
				txt = txt + value + "<br>"; 
			}
		</script>
	</div>
	<?php  ?>
	<!-- Aula 1 -->
	<script type="text/javascript">
		//Curso de Java script com Helio matos do WPmasters
		//alert("Olá mundo");
	</script>
	<!-- Aula 2 -->
	<a href="new_page.php" onclick="alert('Você não vai moço!'); return false">um link comum</a>
	<br><br>
	<img src="img/offline.png" width="200px" height="200px" onmouseover="this.src='img/on.png'" onmouseout="this.src='img/offline.png'">
	<!-- Aula 3 -->
	<script type="text/javascript">
		//A principal diferença entre um constante e uma variavel é que a constante nunca se altera
		/*const my_const = "Minha constante";
		var my_var = "minha variavel";
		alert(my_var);
		alert(my_const);*/
	</script>
	<!-- Aula 4 -->
	<script type="text/javascript">
		//Ele ensinou o basico dos operadores, um pouco de if e só.
	</script>
</body>
</html>