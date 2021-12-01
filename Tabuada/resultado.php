<!DOCTYPE html>
<html>
<head>
	<!-- 2 - Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número -->
	<title> Exercício Dois </title>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

<table>

<?php

function tabuada($num) {
	for ($i=0; $i <= 10; $i++) {
		$res = $num * $i;
		/* 
		<table>
			<tr>
				<td> número x contagem = resultado <td>
			</tr>
		</table>
		*/
		echo "<tr>";
		echo "<td class=\"vermelho\">$num</td> <td class=\"amarelo\">x</td> <td class=\"vermelho\">$i</td> <td class=\"verde\">=</td> <td class=\"azul\">$res</td>";
		echo "</tr>";
	}
}

if (!empty($_POST['num'])) {
	tabuada($_POST['num']);
}

else {
	tabuada(0);
}
?>
</table>

<style>
	table {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 50%;
		height: 80%;
		text-align: center;
		border: 2px solid black;
		font-weight: bold;
		border: none;
	}	
	table td {
		border-radius: 4px;
	}
	table td.verde {
		background: rgb(0,255,0);
	}
	table td.amarelo {
		background:  rgb(255,255,0);
	}
	table td.azul {
		background: rgb(0,0,255);
		color: white;
	}
	table td.vermelho {
		background: rgb(255,0,0);
	}
</style>

</body>
</html>