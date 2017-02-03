<div class="col-md-5">
  <br/>
  <br/>
  <br/>

  <br/><p class="lead"> <strong> ÁREA DO PACIENTE </br></strong> Escolha uma das opções abaixo:</p>
    <div class="list-group">
        <div class="list-group">
          <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'solicitar')); ?>" class="list-group-item"> <strong> Solicitação de Exames</strong></a>
          <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'relacao_exames')); ?>" class="list-group-item"><strong> Exames Solicitados</strong></a>
        
          </div>
    </div>


  <br/><strong><a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'index_login')); ?>"><u>Voltar</u></a></strong>

</div>
