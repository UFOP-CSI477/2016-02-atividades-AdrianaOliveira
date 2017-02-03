<div class="col-md-6">
  <br/>
  <br/>
  <br/>
  <br/><p class="lead"><strong>   AREA DO PACIENTE. </strong> <br/>Altere seu Exame:</p>
</div>

<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
    <div class="col-md-7 col-sm-offset-1">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <center><h3 class="panel-title">Exame: <?php echo $exames[0]['Exame']['id'] ?></h3></center>
        </div>
        <div class="panel-body">
          <h4><strong><center>Dados:</center></strong></h4><br/>
          <table class="table table-hover table-condensed">
            <thead>
              <tr>
                <th width= "10%"></th>
                <th width= "10%">id</th>
                <th>Paciente</th>
                <th>Nome</th>
                <th width= "19%">Data</th>
              </tr>
            </thead>
            <tbody>
              <?php echo $this->Form->create('Exame');?>
              <tr>
                <td>
                  <center><?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-success') );?></center>
                </td>
                <td>
                  <center><br/><?php echo $exames[0]['Exame']['id'] ?></center>
                </td>
                <td>
                  <br/><?php echo $exames[0]['Paciente']['nome'] ?>
                </td>
                <td>
                  <br/><?php echo $exames[0]['Procedimento']['nome'] ?>
                </td>
                <td>
                  <?php echo $this->Form->input('data', array('placeholder' => 'Digite o preço..', 'rule' => 'notEmpty', 'required' => true ,
                  'value' => $exames[0]['Exame']['data'], 'class' => 'form-password form-control', 'label' => '')); ?><br/>
                </td>
              </tr>
            </tbody>
          </table>
          <br/><center><a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'geral_exame')); ?>">Voltar</a></center>
          <br/>
          <br/><center><?php echo $this->Html->link('Deletar Exame',
                                      array('controller' => 'exames', 'action' => 'delet', $exames[0]['Exame']['id'] ),
                                      array('confirm' => 'Deseja mesmo deletar esse Exame?'));?>
           </center>
        </div>
      </div>
    </div>
  </div>
</div>
