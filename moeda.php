<?php include("estrutura/topo.php");?>

<h1>Formatar moedas</h1>
<h2>Usando o real</h2>
<p>Tem valores que precisam ir para real, então espia aqui essa função. A função que vamos utilizar é a <i>number_format</i>. Antes é preciso entender os parâmetros existentes nela:<br>
	number_format(number,decimals,decimalpoint,separator)<br>
	<ul>
		<li>number: o número a ser formatado</li>
		<li>decimals: o número de casas decimais</li>
		<li>decimalpoint: o ponto decimal a ser usado</li>
		<li>separator: o ponto separador de milhar a ser usado</li>
	</ul>

	<span>
	$number = "120250.00";//cento e vinte mil, duzentos e cinquenta<br>
	$number = number_format($number,2,",",".");<br>
	echo $number; ?><br>

	Você obterá: <br><br>
	<b>
	<?php 
	$number = "120250.00";//cento e vinte mil, duzentos e cinquenta
	$number = number_format($number,2,",",".");
	echo $number; ?></b>
	</span>
	<br>
</p>

<?php include("estrutura/rodape.php");?>