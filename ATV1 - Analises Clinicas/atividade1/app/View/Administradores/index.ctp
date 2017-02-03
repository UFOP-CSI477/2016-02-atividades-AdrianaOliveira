<div class="col-md-5">
  <br/>
  <br/>
  <br/>

  <br/><p class="lead"> <strong> Selecione a operação desejada: </br>
    <div class="list-group">
        <a href="<?php echo Router::url(array('controller' => 'procedimentos', 'action' => 'id_procedimentos')); ?>" class="list-group-item">Incluir/ Editar/ Excluir Procedimentos</a>
        <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'geral_exame')); ?>" class="list-group-item">Editar/Excluir Exames</a>
        <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'visual_exame')); ?>" class="list-group-item">Visualizar Exames Solicitados</a>
        <a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'visual_paciente')); ?>" class="list-group-item">Visualizar Pacientes Cadastrados</a>
      </div>
