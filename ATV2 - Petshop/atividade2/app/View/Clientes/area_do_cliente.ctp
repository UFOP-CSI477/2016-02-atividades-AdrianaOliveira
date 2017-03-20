<p> Olá, <?php echo $this->Session->read('Cliente.nome'); ?> </p>
<h1>Área do Cliente</h1>

<p>
	<?php
		echo $this->Html->link("Listar Produtos", array('controller' => 'produtos', 'action' => 'lista_produtos_cliente'));
	?>
</p>

<p>
	<?php
		echo $this->Html->link("Ver carrinho", array(
			'controller' => 'carts',
			'action' => 'view'
		));
	?>
</p>

<p>
	<?php
		echo $this->Html->link("Histórico de Compras", array(
			'controller' => 'compras',
			'action' => 'historico_de_compras',
			$this->Session->read('Cliente.id')
		));
	?>
</p>
