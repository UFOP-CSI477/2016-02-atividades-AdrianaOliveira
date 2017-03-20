<br/>
<br/>
<br/>
<br/>
<br/>
<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">ÁREA DO CLIENTE</h4>
		</div>
		    <div class="panel-body">

  <center><h1 class= "panel-title">Bem vindo(a) ao Petshop PetLove!<br/>Acesse o menu:</h1></center>
	<br/>
	<br/>
	<br/>

						<div class="col-md-1 col-sm-offset-3">
				<p><?php
					  echo $this->Html->Link(
							    'Comprar',
								 array(
									  'controller' => 'produtos',
										'action' => 'visualiza_produtos_cliente'
								),
								array('class' => 'btn-primary btn btn-lg')
						);
			   ?></p>
				    </div>

						<div class="col-md-1 col-sm-offset-1">
				<p><?php
					  echo $this->Html->Link(
							    'Histórico de Compras',
								 array(
									  'controller' => 'compras',
										'action' => 'historico_de_compras'
								),
								array('class' => 'btn-primary btn btn-lg')
						);
			   ?></p>
				    </div>

						<div class="col-md-1 col-sm-offset-2">
				 <p><?php
			 		echo $this->Html->link(
						      'Alterar dados',
								array(
			 						'controller' => 'users',
			 						'action' => 'edit',
			 			      $this->Session->read('User.id')
			 		),
					array('class' => 'btn-primary btn btn-lg')
			);
			 	?></p>
				    </div>
		</div>
</div>
