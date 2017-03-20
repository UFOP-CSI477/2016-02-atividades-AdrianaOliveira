<div class="row">
    <div class="col-lg-6 col-lg-offset-3">

        <h2>Logar</h2>

        <div class="well">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('Cliente',array('inputDefaults'=>array('label'=>false)));?>
            <div class="form-group">
                <label for="ClienteLogin">Usuário</label>
                <?php
                    echo $this->Form->input('login',array(
                        'class'=>'form-control',
                        'placeholder'=>'Nome do usuário'
                    ));
                ?>
            </div>
            <div class="form-group">
                <label for="ClienteSenha">Senha</label>
                <?php
                    echo $this->Form->password('senha',array(
                        'class'=>'form-control',
                        'placeholder'=>'Senha'
                    ));
                ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit('Entrar',array('class'=>'btn btn-primary'))?>
                <?php echo $this->Form->end();?>
            </div>
            <div class="form-group">
                <?php
                    echo $this->Form->Html->link(
                        'Não possui conta? Clique aqui!',
                        array('controller' => 'clientes', 'action' => 'add')
                    );
                ?>
            </div>
        </div>
    </div>
</div>
