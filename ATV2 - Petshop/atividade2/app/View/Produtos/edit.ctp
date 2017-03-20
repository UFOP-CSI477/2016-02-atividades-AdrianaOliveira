<br/>
<br/>
<br/>
<br/>
<br/>
<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">EDITAR PRODUTO</h4>
    </div>

        <div class="panel-body">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('Produto',array(
                'inputDefaults'=>array('label'=>false),
                'type' => 'file'
            ));?>
            <?php
                echo $this->Form->input('id', array('type' => 'hidden'));
                echo $this->Form->input('nome', array(
                    'type' => 'hidden'
                ));
            ?>
            <div class="input-group form-group">
                <label for="ProdutoNome">Imagem</label>
                <span class="input-group">
                    <label for="ProdutoFile" class="btn btn-primary btn-file">Upload...
                        <?php
                            echo $this->Form->file('file',array(
                                'multiple',
                                'style' => 'display:none',
                                'accept' => '.png,.jpg'
                            ));
                        ?></span></label>
                        <?php
                            echo $this->Html->image('Produto');
                            echo    $this->Form->input('imagem',array(
                               'class'=>'form-control',
                               'readonly',
                               'placeholder'=>'Imagem do produto'
                           ));
                        ?>
            </div>
            <div class="form-group">
                <label for="ProdutoPreco">Preço</label>
                <div class="input-group">
                    <div class="input-group-addon">R$</div>
                    <?php
                        echo $this->Form->input('preco',array(
                            'class'=>'form-control',
                            'placeholder'=>'Preço do produto'
                        ));
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?php
                echo $this->Form->submit('Enviar',array('class'=>'btn btn-primary'))?>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
</div>
