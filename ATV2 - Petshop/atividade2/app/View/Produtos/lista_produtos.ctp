<br/>
<br/>
<br/>
<div class="panel panel-primary">

    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Produtos Disponíveis</h4>
        <?php
            echo $this->Html->Link(
                'Ver carrinho',
                array(
                    'controller' => 'carts',
                    'action' => 'view'
                ),
                array('class' => 'btn-default btn btn-md pull-right')
            );
        ?>
    </div>

    <div class="panel-body">
        <?php foreach($produtos as $produto): ?>
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-info" align="center">
                      <p><?php
                          echo $this->Html->image($produto['Produto']['imagem'], array(
                              'alt' => 'imagem' . $produto['Produto']['id'],
                              'width' => '150',
                              'height' => '150',
                              'style' => 'padding-top:5px;'
                          ));
                      ?></p>
                      <p><?php echo $produto['Produto']['nome']; ?></p>
                      <p><?php echo "R$" . $produto['Produto']['preco']; ?></p>
                      <p>

                        <?php echo $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add')));?>
                        <?php echo $this->Form->hidden('id',array('value'=>$produto['Produto']['id']))?>
                        <?php echo $this->Form->submit('Adicionar ao carrinho',array('class'=>'btn-primary btn btn-md'));?>
                        <?php echo $this->Form->end();?>
                      </p>
                  </div>
              </div>
              <?php endforeach; unset($produtos); ?>
        </div>
    </div>
    <strong><a href="<?php echo Router::url('http://localhost/atividade2/'); ?>"><u>Voltar</u></a></strong>
