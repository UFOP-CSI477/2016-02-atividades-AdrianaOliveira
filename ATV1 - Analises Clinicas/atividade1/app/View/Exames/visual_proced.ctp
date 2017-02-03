<div class="col-md-3">
  <br/><p class="lead"><strong> Area Administrativa</strong></p>
  <div class="list-group">
    <a href="<?php echo Router::url(array('controller' => 'administradores', 'action' => 'index')); ?>" class=" active list-group-item">Area Administrativa</a>
      <div class="list-group">
        <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'visual_exame')); ?>" class="list-group-item">Exames Solicitados</a>
        <a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'visual_paciente')); ?>" class="list-group-item">Pacientes</a>
        <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'geral_exame')); ?>" class="active list-group-item">Total Exames Solic.</a>
        <a href="<?php echo Router::url(array('controller' => 'procedimentos', 'action' => 'visual_proced')); ?>" class="list-group-item">Add/Edit/Del Procedimentos</a>
        <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'geral_exame')); ?>" class="list-group-item">Edit/Del - Exames</a>
      </div>
  </div>
</div>
<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
    <div class="col-md-6 col-sm-offset-1">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <center><h3 class="panel-title">Exames do Procedimento: <?php echo $exames[0]['Procedimento']['nome'] ?></h3></center>
        </div>
        <div class="panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>Paciente</th>
                <th>Data</th>
                <th>Preço</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $qtdexam = 0;
              $qtdvalor = 0;
              foreach ($exames as $e):
                  $qtdexam += 1; $qtdvalor += $e['Procedimento']['preco'];?>
                <tr>
                  <td>
                    <?php echo $e['Exame']['id']; ?>
                  </td>
                  <td>
                    <?php echo $e['Paciente']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $e['Exame']['data']; ?>
                  </td>
                  <td>
                    <?php echo $e['Procedimento']['preco']; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
              <tr><td colspan="4"></td></tr>
                <tr class="success">
                <td colspan="2">Total Pacientes:</td><td colspan="2"><?php echo $qtdexam; ?></td>
              </tr>
                <tr class="success">
                <td colspan="2">Valor Total:</td><td colspan="2"> R$ <?php echo $qtdvalor; ?></td>
                </tr>
          </tbody>
          </table>
          <center><a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'listageral')); ?>">Voltar</a></center>
        </div>
      </div>
    </div>
  </div>
