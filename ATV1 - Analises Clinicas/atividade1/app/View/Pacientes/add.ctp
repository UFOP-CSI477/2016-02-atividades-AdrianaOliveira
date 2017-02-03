<div class="col-md-6">
  <br/>
  <br/>
  <br/>
  <br/><p class="lead"><a><strong> Cadastro <br/>Informe os dados abaixo:</a></strong>
</div>


<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
      <div class="col-md-4 col-sm-offset-2">
        <?php echo $this->Form->create('Paciente', array('url' => 'add' ));?>
          <div class="form-group">
            <br/><p><h4><strong>Nome:</strong></h4></p>
            <?php echo $this->Form->input('nome', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-text form-control', 'label' => '')); ?>
          </div>
          <div class="form-group">
            <br/><p><h4><strong>Login:</strong></h4></p>
            <?php echo $this->Form->username('login', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-text form-control', 'label' => '')); ?>
          </div>
          <div class="form-group">
            <br/><p><h4><strong>Senha:</strong></h4></p>
            <?php echo $this->Form->password('senha', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-password form-control', 'label' => ''));?>
          </div>
          <br/><?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-success')); ?>
          <br/><strong><a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'index_login')); ?>"><u>Voltar</u></a></strong>
      </div>
  </div>
</div>
