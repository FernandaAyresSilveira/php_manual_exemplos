<?php include("estrutura/topo.php");?>

<h1>Integrar checkout do Mercado Pago</h1>
<h2>Começando</h2>
<p>Você já tentou inegrar a api de pagamento do Mercado Pago mas não teve sucesso?<br>
	Primeiro precisamos da Api. Aqui você encontra em <i>assets/mercadolivre</i>
</p>

<h2>Inclusão por <i>require_once</i></h2>
<p>
	<span>
		require_once "./assets/php/mercadolivre/lib/mercadopago.php";
	</span>
</p>

<h2>Configure as suas credenciais de acesso</h2>
<p>
	<span>
		$mp = new MP("0000000000", "xxxxxxx"); // seller access_token
	</span>
</p>

<h2>Inicialize o <i>array</i> que receberá os dados</h2>
<p>
	<span>
		$itensMP = array();
	</span>
</p>



<h2>Crie um <i>loop</i> com seus produtos</h2>
<p>
	<span>
		//Exemplo de produtos <br>
		<?php 
		$itensMP = array();
		$itens = array(
			array("id"=>"12145", "title" => "Caderno 1 matéria", "quantity" => 3, "price" => 15),
			array("id"=>"115566", "title" => "Caderno 10 matérias", "quantity" => 1, "price" => 20)
		);

		foreach ($itens as $item) {

    $itemMP = array(
        "id" => $item["id"],
        "title" => $item["title"],
        "quantity" => intval(1),
        "currency_id" => "BRL", 
        "unit_price" => floatval($item["price"])
    );

    array_push($itensMP, $itemMP);

}

		?>		
		$itensMP = array();<br>
		$itens = array(<br>
			array("id"=>"12145", "title" => "Caderno 1 matéria", "quantity" => 3, "price" => 15),<br>
			array("id"=>"115566", "title" => "Caderno 10 matérias", "quantity" => 1, "price" => 20)<br>
		);<br><br>

		foreach ($itens as $item) {<br>

    $itemMP = array(<br>
        "id" => $item["id"],<br>
        "title" => $item["title"],<br>
        "quantity" => intval(1),<br>
        "currency_id" => "BRL", <br>
        "unit_price" => floatval($item["price"])<br>
    );

    array_push($itensMP, $itemMP);<br>

		
	</span>
</p>

<h2>Inclusão de frete e descontos</h2>
<p>
	<span>


$itemMP = array(
        "id" => 1,
        "title" => 'Frete',
        "quantity" => intval(1),
        "currency_id" => "BRL", 
        "unit_price" => floatval($venda->valor_frete)
    );
    array_push($itensMP, $itemMP);

    if ($venda->valor_desconto > 0) {
    	$itemMP = array(
	        "id" => 1,
	        "title" => 'Desconto',
	        "quantity" => intval(1),
	        "currency_id" => "BRL", 
	        "unit_price" => -(floatval($venda->valor_desconto))
	    );
    	array_push($itensMP, $itemMP);
    }
</span>

<?php include("estrutura/rodape.php");?>