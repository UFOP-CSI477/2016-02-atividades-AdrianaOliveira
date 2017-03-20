<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link(__('PetShop'),'/',array('class'=>'navbar-brand'));?>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo $this->Html->link(__('Área Geral'),array('controller'=>'pages','action'=>'home'));?></li>
            <li><?php echo $this->Html->link(__('Área do Cliente'),array('controller'=>'clientes','action'=>'area_do_cliente'));?></li>
            <li><?php echo $this->Html->link(__('Área Administrativa'),array('controller'=>'usuarios','action'=>'index'));?></li>
            <?php
                if($this->Session->check('Cliente') || $this->Session->check('Usuario')): ?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php
                        if($this->Session->check('Cliente')){
                            echo $this->Session->read('Cliente.login');
                        }else if($this->Session->check('Usuario')){
                            echo $this->Session->read('Usuario.login');
                        }
                            ?> <b class="caret"></b></a>

                         <li>
                            <?php echo $this->Html->link(__('Sair'),array('action'=>'logout'));?>
                         </li>
                      </ul>
                    </li>
                <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</div>
