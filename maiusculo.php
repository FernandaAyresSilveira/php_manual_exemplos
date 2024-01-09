<?php include("estrutura/topo.php");?>

<h1>Letra maiúscula</h1>
<h2>Frase completa</h2>
<p>Já passou um momento em que foi preciso colocar toda frase em maiúsculo e não conseguiu? Borá la usar um recurso importante, que vai te facilitar a vida. A função que vamos utilizar é a <i>strtoupper</i>.<br>

	<span>
	$string = "transformando uma frase." <br>
	$string = strtoupper($string); <br>
	echo $string;<br><br>

	Você obterá: <br>
	<b>
	<?php 
	$string = "Transformando uma frase.";
	$string = strtoupper($string);
	echo $string; ?></b>
	</span>
	<br>
</p>

<h2>Primeira letra da frase maiúscula</h2>
<p>Tem uma frase e precisa colocar sua letra inicial maiúscula? A função que vamos utilizar é a <i>ucfirst</i>.<br>

	<span>
	$string = "transformando uma frase." <br>
	$string = ucfirst($string); <br>
	echo $string;<br><br>

	Você obterá: <br>
	<b>
	<?php 
	$string = "Transformando uma frase.";
	$string = ucfirst($string);
	echo $string; ?></b>
	</span>
	<br>
</p>

<h2>Primeira letra da palavra maiúscula</h2>
<p>Tem uma frase e precisa colocar a letra inicial de cada palavra em maiúsculo? A função que vamos utilizar é a <i>ucwords</i>.<br>

	<span>
	$string = "transformando uma frase." <br>
	$string = ucwords($string); <br>
	echo $string;<br><br>

	Você obterá: <br>
	<b>
	<?php 
	$string = "Transformando uma frase.";
	$string = ucwords($string);
	echo $string; ?></b>
	</span>
	<br>
</p>
<?php include("estrutura/rodape.php");?>