<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"k>
	<meta name ="viewport" content"width=device-width, initial-scale=1">
	<title>Calculo De Consumo de Combustível</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>	
<body>
	<main>
		<div class="painel">
			<h2>Instruções</h2>
			<div class ="conteudo-painel">
				<p>Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veículo, e com a distância determinada por você!</p>
				<p> Os Combustíveis disponíveis para este cálculo são:</p>
				<ul>
					<li><b>Álcool</b></li>
					<li><b>Díesel</b></li>
					<li><b>Gasolina</b></li>
				</ul>
			</div>
		</div>
		
		<div class="painel">
			<h2> Cálculo do valor (R$) do consumo</h2>
			<div class="conteudo-painel">
				<form action="calculo.php" method="POST">
					<label for="distancia"> Distância em quilômetros a ser percorrido</label>
					<input type="number" class="campotexto" name="distancia" required/>

					<label for="autonomia">Consumo de combustível do veículo (km/l)</label>
					<input type="number" class="campotexto" name="autonomia" requiered/>

					<button class="botao" type="submit"> Calcular</button>
				</form>
			</div>
		</div>
	</main>				
</body>

</html>