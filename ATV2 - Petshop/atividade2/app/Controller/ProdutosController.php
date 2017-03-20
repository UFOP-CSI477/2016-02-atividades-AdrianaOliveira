<?php

class ProdutosController extends AppController{

    var $uses = array('Compra','Produto');
    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    public function index(){
        $this->redirect(array(
            'action' => 'visualiza_produtos'
        ));
    }

    public function area_administrativa(){

  }



    public function visualiza_produtos(){
        $this->set('produtos', $this->Produto->find('all'));
    }

    public function visualiza_produtos_cliente(){
        if($this->Session->check('User')){
            $this->set('produtos', $this->Produto->find('all'));
        }else{
            $this->redirect(array(
                'controller' => 'users',
                'action' => 'login'
            ));
        }
    }

    public function visualiza_produtos_admin($typo){
        if($this->Session->check('User')){
            if($typo == 1){
                $this->redirect(array(
                    'action' => 'visualiza_produtos_adm'
                ));
            }else if($typo == 2){
                $this->redirect(array(
                    'action' => 'visualiza_produtos_operador'
                ));
            }
        }else{
            $this->redirect(array(
                'controller' => 'users',
                'action' => 'login_adm'
            ));
        }
    }

    public function visualiza_produtos_adm(){
        $this->set('produtos', $this->Produto->find('all'));
    }
    public function visualiza_produtos_oper(){
        $this->set('produtos', $this->Produto->find('all'));
    }

    public function view($id){
        if(!$id){
            $this->Flash->error(__('Produto was not found!'));
        }
        $produto = $this->Produto->findById($id);
        $this->set('produto', $produto);
    }

    public function add(){
        // if the HTTP method is POST
        if($this->request->is('post')){
            $this->Produto->create();
            if (!empty($this->request->data['Produto']['file']['name'])){
                $file = $this->request->data['Produto']['file'];

                // Strip path information
                move_uploaded_file(
                    $file['tmp_name'],
                    WWW_ROOT . DS . 'img' . DS . $file['name']
                );
                $this->request->data['Produto']['imagem'] =  $file['name'];
            }

            // Set the file-name only to save in the database
            if($this->Produto->save($this->request->data)){
                $this->Flash->success(__('Produto cadastrado com sucesso!'));
                return $this->redirect(array('controller' => 'administradores', 'action' => 'index'));
            }
            $this->Flash->error(__('Produto não foi cadastrado'));
        }
    }

    public function edit($id = null){
        if(!$id){
            throw new NotFoundException(__('Produto inválido!'));
        }
        $produto = $this->Produto->findById($id);
        if(!$produto){
            throw new NotFoundException(__('Produto inválido!'));
        }
        if($this->request->is(array('post','put'))){
            $this->Produto->id = $id;
            $file = $this->request->data['Produto']['file'];
            move_uploaded_file(
                $file['tmp_name'],
                WWW_ROOT . DS . 'img' . DS . $file['name']
            );
            $this->request->data['Produto']['imagem'] =  $file['name'];
            if($this->Produto->save($this->request->data)){
                $this->Flash->success(__('Informações do produto foram atualizadas'));
                return $this->redirect(array(
                    'controller' => 'produtos',
                    'action' => 'visualiza_produtos_adm'
                ));
            }
            $this->Flash->error(__('Produto não foi atualizado'));
         }
         if(!$this->request->data){
             $this->request->data = $produto;
         }
    }

    public function delete($id = null){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        $compra = $this->Compra->findByProdutoId($id);
        if($compra == null && $this->Produto->delete($id)){
            $this->Flash->success(__('Produto %s excluído com sucesso.', h($id)));
            return $this->redirect(array('action' => 'visualiza_produtos_adm'));
        }else{
            $this->Flash->error(__('Produto %s não foi excluído.', h($id)));
        }
        return $this->redirect(array('action' => 'visualiza_produtos_adm'));
    }
}
?>
