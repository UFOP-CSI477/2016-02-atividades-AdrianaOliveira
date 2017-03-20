<?php

  class ComprasController extends AppController{

    var $uses = array('Compra','Produto');
    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    public function index(){
    }

    public function listaCompras(){
      $this->set('compras', $this->Compra->find('all'));
    }

    public function historico_de_compras($id = null){
        if(!$id){
        //  $this->Session->Flash->setFlash(__('Clientes não fez compras ainda'));
        }
        $produtos = $this->Produto->find('all');
        $imagens = array();
        foreach($produtos as $p){
            $imagens[$p['Produto']['id']] = $p['Produto']['imagem'];
        }
        $comprasFiltradas = $this->Compra->findAllById($id);
        $this->set('compra', $comprasFiltradas);
        $this->set('imagens', $imagens);
    }

    public function view($id = null){
        if(!$id){
            $this->Session->Flash->setFlash(__('Compra não foi encontrada!'));
        }
        $compra = $this->Compra->findById($id);
        $this->set('compra', $compra);
    }

    public function comprar(){
      $this->loadModel('compra');
      $arrayQtd = $this->request->data;
      $cont = 0;
      foreach ($arrayQtd as $qtd) {

    $this->request->data['Compra']['user_id'] = $this->Session->read('User')[0]['User']['id'];
        $this->request->data['Compra']['produto_id'] = $this->Session->read('Carrinho')[$cont]; $cont++;
        $this->request->data['Compra']['quantidade'] = $qtd;
        $this->request->data['Compra']['data'] = date("Y-m-d h:i:s");
        $this->Compra->create();
        $this->Compra->save($this->request->data);
  }

  //destruir o carrinho
  $this->Session->delete('Carrinho');


            $numero = rand(1000,9999);
            $this->Flash->success(__("Compra efetuada com sucesso! Protocolo para pagamento: $numero (Entre em contato!)"));
            $this->Session->delete('carrinho');
            return $this->redirect(array(
                'controller' => 'users',
                'action' => 'area_do_cliente'
            ));


    }

    public function edit($id = null){
        if(!$id){
            throw new NotFoundException(__('Compra inválida!'));
        }
        $compra = $this->Compra->findById($id);
        if(!$compra){
            throw new NotFoundException(__('Compra inválida!'));
        }
        if($this->request->is(array('post','put'))){
            $this->Compra->id = $id;
            if($this->Compra->save($this->request->data)){
                $this->Flash->success(__('Compra editada com sucesso!'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Compra não foi atualizada!'));
         }
         if(!$this->request->data){
             $this->request->data = $compra;
         }
    }

    public function delete($id = null){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        if($this->Compra->delete($id)){
            $this->Flash->success(__('Compra %s foi excluída com sucesso!', h($id)));
            return $this->redirect(array('action' => 'index'));
        }else{
            $this->Flash->error(__('Compra %s não foi excluída!', h($id)));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
?>
