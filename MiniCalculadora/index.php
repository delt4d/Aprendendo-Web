<!DOCTYPE html>
<html>
<head>
	<!-- Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. 	-->
	<title> Exercício Quatro </title>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
	
	<section id="container">
			<div class="calculadora">
				<div class="resultado">
					<?php 
					
						$n1 = 0; $n2 = 0; $op = 'somar';
						
						if (!empty($_POST['n1'])) $n1 = $_POST['n1'];
						if (!empty($_POST['n2'])) $n2 = $_POST['n2'];
						if (!empty($_POST['op'])) $op = $_POST['op'];
						
						if ($n2 == 0 and $op == 'dividir') 
						{
							echo "<small style=\"font-size:20px;\">Impossível dividir por zero!</small>";
						}
						else 
						{
							switch ($op) 
							{
								case 'somar':
									$res = $n1 + $n2; break;
								case 'subtrair':
									$res = $n1 - $n2; break;
								case 'multiplicar':
									$res = $n1 * $n2; break;
								case 'dividir':
									$res = $n1 / $n2; break;
								default:
									$res = 0; break;
							}
							echo $res;
						}
					?>
				</div>	
				<form action="" method="POST">
					<div class="numeros">
						<input type="number" name="n1" placeholder="primeiro número"> <input type="number" name="n2" placeholder="segundo número">
					</div>
					
					<div class="operadores">
						<input type="submit" name="op" value="somar">
						<input type="submit" name="op" value="subtrair">
						<input type="submit" name="op" value="multiplicar">
						<input type="submit" name="op" value="dividir">
					</div>
				</form>
			</div>
	</section>

	
	<style>
		* {
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}

		html, body {
			width: 100vw;
			height: 100vh;
			background-color: whitesmoke;
			font-family: 'Poppins', monospace;
		}
		#container {
			transform: translate(-50%, -50%);
			position: relative;
			left: 50%;
			top: 50%;
			width: 700px;
			height: 90%;
			padding: 40px;
			background-color: lightgray;
			border-radius: 5px;
			box-shadow: 0 0 10px black;
		}
		
		.calculadora {
			display: block;
			width: 100%;
			height: 100%;
		}
		
		.resultado {
			background: white;
			width: 100%;
			height: 80px;
			border: 4px inset gray;
			font-size: 50px;
			display: flex;
			justify-content: flex-start;
			align-items: center;
			padding-left: 5px;
		}
		
		form .numeros {
			margin-top: 50px;
			display: flex;
			flex-wrap: nowrap;
		}
		
		form .operadores {
			margin-top: 50px;
			display: grid;
			grid-template-columns: 1fr 1fr;
			background: blue;
		}
		
		form .numeros input[type=number] {
			height: 80px;
			width: 100%;
		}
		
		form .operadores input[type=submit] {
			cursor: pointer;
			height: 50px;;
		}
	</style>
	
	
</body>	
</html>