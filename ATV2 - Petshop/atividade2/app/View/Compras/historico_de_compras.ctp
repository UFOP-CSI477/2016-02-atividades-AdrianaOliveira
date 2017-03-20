<br/>
<br/>
<br/>
<br/>
<br/>
<div class="panel panel-primary">
	<div class="panel-heading clearfix">
			<h4 class="panel-title pull-left" style="padding-top: 7.5px;">HISTÓRICO DE COMPRAS</h4>
  </div>
  <div class="panel-body">
      <table class="table">
        <thead>
          <tr>
            <th class="col-md-1">Id</th>
            <th class="col-md-2">Produto</th>
            <th class="col-md-3">Preço</th>
            <th class="col-md-3">Quantidade</th>
            <th class="col-md-3">Data</th>
          </tr>
        <thead>
        <tbody>
          <?php foreach($compra as $r): ?>
            <tr>
            <td>
                <?php echo $r['Compra']['id']; ?>
              </td>
              <td>
                <?php
                    echo $this->Html->image($imagem[$r['Compra']['produto_id']], array(
                        'alt' => 'imagem' . $r['Compra']['id'],
                        'width' => '150',
                        'height' => '150'
                    ));
                ?>
              </td>
              <td>
                <?php
                  echo $r['Produto']['preco'];
                ?>
              </td>
              <td>
                <?php
                  echo $r['Compra']['quantidade'];
                ?>
              </td>
              <td>
                <?php
                  echo $r['Compra']['data'];
                ?>
              </td>
            </tr>

          <?php endforeach; unset($r); ?>
          </tbody>
        </table>
    <strong><a href="<?php echo Router::url('http://localhost/atividade2/'); ?>"><u>Voltar</u></a></strong>

</div>
</div>
