<div class="col-md-6">
  <br/>
  <br/>
  <br/>
  <br/><p class="lead"><strong>   ÁREA DO PACIENTE </strong> <br/>Solicite seu Exame:</p>
</div>


<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
    <div class="col-md-8 col-sm-offset-1">
        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              <th>EXAME</th>
              <th>VALOR</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($procedimentos as $p): ?>
                <tr>
                  <td>
                    <center><a href=" <?php echo Router::url(array('controller' => 'exames', 'action' => 'salvar_exames', $p['Procedimento']['id'])); ?>" ><button class='btn btn-primary'>Solicitar</button></a></center>
                  </td>
                  <td>
                    <?php echo $p['Procedimento']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $p['Procedimento']['preco']; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <br/><strong><a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'geral')); ?>"><u>Voltar</u></a></strong>
</div>
