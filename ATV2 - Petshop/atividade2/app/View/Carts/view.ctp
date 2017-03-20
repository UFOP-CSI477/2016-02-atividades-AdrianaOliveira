<?php echo $this->Form->create('Cart',array('url'=>array('controller' => 'clientes', 'action'=>'login')));?>
<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<thead>
				<tr>
					<th class="col-lg-3">Produto</th>
					<th class="col-lg-3">Preço</th>
					<th class="col-lg-3">Quantidade</th>
					<th class="col-lg-3">Total</th>
				</tr>
			</thead>
			<tbody>
				<?php $total=0;?>
				<?php foreach ($produtos as $produto):?>
				<tr>
					<td>
						<p><?php
							echo $this->Html->image($produto['Produto']['imagem'], array(
								'width' => '100',
								'height' => '100',
								'alt' => 'imagem' . $produto['Produto']['id'],
							));
						?></p>
						<p><?php echo $produto['Produto']['nome'];?>
					</td>
					<td>$<?php echo $produto['Produto']['preco'];?>
					</td>
					<td>
						<div class="col-md-6">
							<?php
								echo $this->Form->hidden('id.',array('value'=>$produto['Produto']['id']));?>
							<?php
								echo $this->Form->number('count.',array('label'=>false,
									'class'=>'form-control input-md', 'value'=>$produto['Produto']['count']));?>
						</div>
					</td>
					<td>$<?php echo $produto['Produto']['count']*$produto['Produto']['preco']; ?>
					</td>
				</tr>
				<?php $total = $total + ($produto['Produto']['count']*$produto['Produto']['preco']);?>
				<?php endforeach;?>
				<tr class="success">
					<td colspan=3></td>
					<td>$<?php echo $total;?>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="text-right">
			<?php echo $this->Form->submit('Comprar',array('class'=>'btn btn-success','div'=>false));?>
		</p>
	</div>
</div>
<?php echo $this->Form->end();?>
