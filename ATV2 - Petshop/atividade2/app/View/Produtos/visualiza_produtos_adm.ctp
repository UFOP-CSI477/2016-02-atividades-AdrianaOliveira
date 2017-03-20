<br/>
<br/>
<br/>
<br/>
<br/>
<?php
     echo $this->Session->flash(); ?>
<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Produtos Disponíveis</h4>
    </div>

        <table class="table table-responsive table-striped">
          <tr>
            <th class="col-md-1">Id do Produto</th>
            <th class="col-md-2">Imagem do Produto</th>
            <th class="col-md-2">Nome do Produto</th>
            <th class="col-md-2">Preço do Produto</th>
            <th class="col-md-2">Permissões do Administrador</th>
          </tr>

          <?php foreach($produtos as $produto): ?>
            <tr>
            <td>
                <?php echo $produto['Produto']['id']; ?>
              </td>
              <td>
                <?php
                    echo $this->Html->image($produto['Produto']['imagem'], array(
                        'alt' => 'imagem' . $produto['Produto']['id'],
                        'width' => '100',
                        'height' => '100'
                    ));
                ?>
              </td>
              <td>
                <?php
                  echo $produto['Produto']['nome'];
                ?>
              </td>
              <td>
                <?php
                  echo $produto['Produto']['preco'];
                ?>
              </td>
              <td>
                  <?php
                      echo $this->Html->link(
                          'Editar',
                          array(
                              'action' => 'edit', $produto['Produto']['id']
                          ),
                          array('class' => 'btn-primary btn btn-md')
                      );
                  ?>

                  <?php
                      echo $this->Html->link(
                          'Excluir',
                          array(
                              'action' => 'delete', $produto['Produto']['id']
                          ),
                          array(
                              'class' => 'btn-primary btn btn-md',
                              'confirm' => 'Tem certeza que deseja excluir o produto ' . $produto['Produto']['id'] . '?'
                          )
                      );
                  ?>
              </td>
            </tr>

          <?php endforeach; ?>
        </table>
        <?php unset($produtos); ?>
</div>
