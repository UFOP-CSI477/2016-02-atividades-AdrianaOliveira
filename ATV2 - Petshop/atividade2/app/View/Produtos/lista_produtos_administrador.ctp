<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Produtos</h4>
        <?php
            echo $this->Html->Link(
                'Adicionar',
                array('action' => 'add'),
                array('class' => 'btn-default btn btn-md pull-right')
            );
        ?>
    </div>
        <table class="table table-responsive table-striped">
          <tr>
            <th class="col-md-1">Id</th>
            <th class="col-md-2">Imagem</th>
            <th class="col-md-3">Nome</th>
            <th class="col-md-3">Preço</th>
            <th class="col-md-3">Ações</th>
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
                          array('class' => 'btn-info btn btn-md')
                      );
                  ?>
                  <?php
                      echo $this->Html->link(
                          'Excluir',
                          array(
                              'action' => 'delete', $produto['Produto']['id']
                          ),
                          array(
                              'class' => 'btn-danger btn btn-md',
                              'confirm' => 'Deseja realmente excluir o produto ' . $produto['Produto']['id'] . '?'
                          )
                      );
                  ?>
              </td>
            </tr>

          <?php endforeach; ?>
        </table>
        <?php unset($produtos); ?>
</div>
