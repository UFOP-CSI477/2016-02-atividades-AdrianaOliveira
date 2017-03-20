<ul class="nav navbar-nav">

  <li><?= $this->Html->link("Área Geral",	array('controller' => 'produtos', 'action' => 'visualiza_produtos')); ?></li>
  <li><?= $this->Html->link("Clientes",	array('controller' => 'users', 'action' => 'login')); ?></li>
  <li><?= $this->Html->link("Administração",	array('controller' => 'users', 'action' => 'login_adm')); ?></li>

  </ul>

<div class="form-top container top-content form-top row">
    <br/>
    <br/>
    <br/>
</div>

<div class="panel panel-primary">
        <div class="panel-heading">
          <center><h1 class= "panel-title">Deixe o seu animalzinho de estimação em um lar carinhoso! <br> Proporcionamos proteção e bem estar para o seu bichinho!</h1></center>
        </div>

        <div class="panel-body">
          <center>  <div class="container">
            	<?php echo $this->Html->image('pet.jpg', array('alt' => 'pet', 'height' => 350));?>
            </div></center>
        </div>
</div>
