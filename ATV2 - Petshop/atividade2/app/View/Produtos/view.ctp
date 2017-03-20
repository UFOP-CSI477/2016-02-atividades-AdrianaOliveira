<div class="panel panel-info col-md-3" align="center">
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
</div>
