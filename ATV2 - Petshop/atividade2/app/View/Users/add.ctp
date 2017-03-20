<br/>
<br/>
<br/>
<br/>
<br/>
<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">CADASTRAR CLIENTE</h4>
    </div>

          <div class="panel-body">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('User',array('inputDefaults'=>array('label'=>false)));?>
            <div class="form-group">
                <label for="UserName">Nome</label>
                <?php
                    echo $this->Form->input('name',array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe seu nome'
                    ));
                ?>
            </div>
            <div class="form-group">
                <label for="UserLogin">Email</label>
                <?php
                    echo $this->Form->input('email',array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe seu email'
                    ));
                ?>
            </div>
            <div class="form-group">
                <label for="UserSenha">Senha</label>
                <?php
                    echo $this->Form->input('password',array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe sua senha'
                    ));
                ?>
              </div>

              <div class="form-group">
                  <label for="UserSenha">Confirme sua Senha</label>
                  <?php
                      echo $this->Form->input('password',array(
                          'class'=>'form-control',
                          'placeholder'=>'Informe sua senha'
                      ));
                  ?>
                </div>


                <div class="form-group">
                    <label for="UserRemember_token">Lembrete de senha</label>
                    <?php
                        echo $this->Form->input('remember_token',array(
                            'class'=>'form-control',
                            'placeholder'=>'Informe um lembrete'
                        ));
                    ?>
                    </div>

            <div class="form-group">
                    <?php echo $this->Form->submit('Enviar',array('class'=>'btn btn-primary'))?>
                </div>
            </div>

            <?php echo $this->Form->end();?>
        </div>
