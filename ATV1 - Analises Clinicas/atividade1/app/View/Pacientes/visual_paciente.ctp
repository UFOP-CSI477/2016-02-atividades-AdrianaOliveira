<div class="col-md-3">
  <br/><p class="lead"><strong> Área Administrativa !</strong></p>
  <div class="list-group">
    <a href="<?php echo Router::url(array('controller' => 'administradores', 'action' => 'index')); ?>" class=" active list-group-item">Área Administrativa</a>
      <div class="list-group">
        <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'visual_exame')); ?>" class="list-group-item">Exames Solicitados</a>
        <a class="active list-group-item">Pacientes</a>
        <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'lista_completa')); ?>" class="list-group-item">Total de Exames Solicitados</a>
        <a href="<?php echo Router::url(array('controller' => 'procedimentos', 'action' => 'id_procedimentos')); ?>" class="list-group-item">Add/Edit/Del Procedimentos</a>
        <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'geral_exame')); ?>" class="list-group-item">Edit/Del - Exames</a>
      </div>
  </div>
</div>
<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
      <div class="col-md-6 col-sm-offset-1">
        <h4><strong><center>Pacientes</center></strong></h4><br/>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>id</th>
              <th>Nome</th>
              <th>Login</th>
              <th>Senha</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($pacientes as $p): ?>
                <tr>
                  <td>
                    <?php echo $p['Paciente']['id']; ?>
                  </td>
                  <td>
                    <?php echo $p['Paciente']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $p['Paciente']['login']; ?>
                  </td>
                  <td>
                    <?php echo $p['Paciente']['senha']; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
          </tbody>
          </table>
      </div>
    </div>
