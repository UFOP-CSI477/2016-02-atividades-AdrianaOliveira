<br/>
<br/>
<br/>
<br/>
<br/>
<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">ALTERAR DADOS PESSOAIS</h4>
    </div>
        <div class="panel-body">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('User',array('inputDefaults'=>array('label'=>false)));?>
            <?php
                echo $this->Form->input('id', array('type' => 'hidden'));
            ?>

            <div class="form-group">
                <label for="UserName">Nome</label>
                <?php
                    echo $this->Form->input('name',array(
                      'readonly',
                      'class'=>'form-control'
                    ));
                ?>
            </div>
            <div class="form-group">
                <label for="UserEmail">Usuário</label>
                <?php
                    echo $this->Form->input('email', array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe seu email'
                    ));
                ?>
            </div>

            <div class="form-group">
                <label for="UserPassword">Nova Senha</label>
                <?php
                    echo $this->Form->input('password',array(
                        'class'=>'form-control',
                        'type' => 'password',
                        'placeholder'=>'Informe sua nova senha'
                    ));
                ?>
            </div>
            <div class="form-group">
                <label for="UserPassword">Confirme Nova Senha</label>
                <?php
                    echo $this->Form->input('password',array(
                        'class'=>'form-control',
                        'type' => 'password',
                        'placeholder'=>'Confirme sua nova senha'
                    ));
                ?>
            </div>
            
            <div class="form-group">
                <label for="UserPassword">Lembrete de Senha</label>
                <?php
                    echo $this->Form->input('remember_token',array(
                        'class'=>'form-control',
                        'type' => 'remember_token',
                        'placeholder'=>'Informe um lembrete para a nova senha'
                    ));
                ?>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->submit('Enviar',array('class'=>'btn btn-primary'))?>
                  <?php echo $this->Form->end(); ?>
            </div>

        </div>
</div>
