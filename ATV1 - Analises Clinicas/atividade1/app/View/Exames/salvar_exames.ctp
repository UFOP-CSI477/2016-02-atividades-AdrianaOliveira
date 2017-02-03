
<div class="col-md-6">
  <br/>
  <br/>
  <br/>
  <br/><p class="lead"><a><a>Você está na<a/><strong>   ÁREA DO PACIENTE. </strong> <br/>Informe a data do exame e salve sua solicitação:</p>
</div>


<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
  <div class="col-md-6 col-sm-offset-1">
    <div class="panel panel-primary">
      <div class="panel-body">
        <?php
        echo $procedimento['Procedimento']['nome'];?>
        &nbsp&nbsp&nbsp&nbsp
        R$<?php echo $procedimento['Procedimento']['preco'];
        echo $this->Form->create('Exame');?>
        &nbsp&nbsp&nbsp&nbsp
        <?php  echo $this->Form->input('data', array('label' => 'Data para exame:    ', 'rule' => 'notEmpty', 'required' => true ,'placeholder' => '', 'class' => 'form-text'));?>
        <?php
              $this->Form->hidden('paciente_id');
              $this->Form->hidden('procedimento_id'); ?>
        <br/><?php echo $this->Form->submit('Salvar',  array('class' => 'btn btn-success')); ?>
      </div>
    </div>
  </div>
</div>
  <br/><strong><a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'solicitar')); ?>"><u>Voltar</u></a></strong>
</div>
