<br/>
<br/>
<br/>
<br/>
<br/>
<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">ÁREA ADMINISTRATIVA</h4>
		</div>
		    <div class="panel-body">
  <center><h1 class= "panel-title">Olá, Bem vindo(a) ao Petshop Online!<br/>Acesse o menu abaixo:</h1></center>
	<br/>
	<br/>
	<br/>

						<div class="col-md-1 col-sm-offset-3">
				<p><?php
					  echo $this->Html->Link(
							    'Cadastrar Produto',
								 array(
									  'controller' => 'produtos',
										'action' => 'add'
								),
								array('class' => 'btn-primary btn btn-lg')
						);
			   ?></p>
				    </div>


            <div class="col-md-2 col-sm-offset-3">
				 <p><?php
			 		echo $this->Html->link(
						      'Alterar ou Excluir Produtos',
                  array(
                     'controller' => 'produtos',
                     'action' => 'visualiza_produtos_adm'
                 ),
                 array('class' => 'btn-primary btn btn-lg')
            );
			 	?></p>
				    </div>

		</div>
</div>
