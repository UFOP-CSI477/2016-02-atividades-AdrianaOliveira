<table>

  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Login</th>
    <th>Ações</th>
  </tr>

  <?php foreach($clientes as $cliente): ?>
    <tr>
      <td>
        <?php echo $cliente['Cliente']['id']; ?>
      </td>
      <td>
        <?php
          echo $this->Html->link(
            $cliente['Cliente']['nome'], array(
              'controller' => 'clientes', 'action' => 'view',
              $cliente['Cliente']['id']
            )
          );
        ?>
      </td>
      <td>
        <?php
            echo $this->Html->link(
                $cliente['Cliente']['login'], array(
                  'controller' => 'clientes', 'action' => 'view',
                  $cliente['Cliente']['id']
                )
            );
        ?>
      </td>
      <td>
        <?php
            echo $this->Form->postLink(
                'Excluir',
                array('action' => 'delete', $cliente['Cliente']['id']),
                array('confirm' => 'Deseja realmente excluir o cliente ' . $cliente['Cliente']['id'] . '?')
            );
        ?>
<?php echo $this->Form->postLink('Editar',
array('action' => 'edit', $cliente['Cliente']['id']));
?>
    </tr>

  <?php endforeach; ?>
</table>
<?php unset($clientes); ?>
