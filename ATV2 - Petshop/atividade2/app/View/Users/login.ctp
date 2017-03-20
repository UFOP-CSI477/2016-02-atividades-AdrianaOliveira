<br/>
<br/>
<br/>
<br/>
<br/>
  <?php echo $this->Session->flash(); ?>
<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">EFETUAR LOGIN - CLIENTE</h4>
    </div>
        <div class="panel-body">

            <?php echo $this->Form->create('User',array('inputDefaults'=>array('label'=>false)));?>
            <div class="form-group">
                <label for="UserEmail">Email</label>
                <?php
                    echo $this->Form->input('email',array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe seu email'
                    ));
                ?>
            </div>
            <div class="form-group">
                <label for="UserPassword">Senha</label>
                <?php
                    echo $this->Form->password('password',array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe sua senha'
                    ));
                ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit('Enviar',array('class'=>'btn btn-primary'))?>
                <?php echo $this->Form->end();?>
            </div>

            <div class="form-group">
                <?php
                    echo $this->Form->Html->link(
                        'Não possui conta? Clique aqui!',
                        array('controller' => 'users', 'action' => 'add')
                    );
                ?>
            </div>
        </div>
</div>
