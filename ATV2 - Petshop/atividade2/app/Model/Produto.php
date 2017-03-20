<?php

  class Produto extends AppModel{

      public $validate = array(
          'nome' => array(
              'alphaNumeric' => array(
                  'rule' => 'notBlank',
                  'required' => true,
                  'message' => 'Insira o nome do produto'
              )
          ),
          'preco' => array(
              'required' => array(
                  'rule' => 'numeric',
                  'message' => 'Informe um valor monetário válido'
              )
          )
      );
  }

?>
