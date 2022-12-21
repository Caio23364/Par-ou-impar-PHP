<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Impar e par😈</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
</head>

<body style="text-align:center;background-color:#ff00ff">
	<h1>É sorteado um numero de 1 a 10</h1>
	<h1>Você ganha caso de numero par</h1>
	<div class="container-fluid border rounded-5 bg-light">
		<?php
        //Desabilita Warns por causa de variaveis sem definição
        error_reporting(LOG_WARNING);
        //Cria sessão
        $saldo = $_COOKIE["cassino"];
        //Seta um numero de saldo para a variavel
        if ($saldo == NULL) {
	        $saldo = 2;
        }
        //Se o saldo é zero você perde
        if ($saldo == 0 or $saldo < 0) {
	        //Aqui fica espaço para qualquer ideia
        	echo ("Você Perdeu!!Resete seus cookies");
        } else {
	        //Aqui traz numeros aleatorios
        	$numero = rand(1, 10);
	        echo "$saldo 🎃 saldo<br>";
	        echo "Numero sorteado foi: $numero";
	        //Verifica ce é par, se for o usuario ganhou.
        	if ($numero % 2 == 0) {
		        echo ("<br>");
		        echo ("<b>Você ganhou!!</b>😀");
		        $saldo++ + 1;
	        } else {
		        echo ("<br>");
		        echo ("<b>Você perdeu</b> !!🚫");
		        $saldo -= 1;
	        }
	        echo "<br>Novo Saldo !!<br>$saldo 🎃 saldo";
	        //Cria um cookie e salva o saldo
        	setcookie("cassino", $saldo);
        }
        ?>
	</div>
	<br>
	<button onClick="window.location.reload();">Jogar denovo</button>
</body>
<footer class="p-5 border rounded-5 container-fluid fixed-bottom text-white">
	<p>Codigo feito do zero baseado em vozes da minha cabeça</p>
	<a href="https://github.com/Caio23364/">Github</a>
</footer>

</html>