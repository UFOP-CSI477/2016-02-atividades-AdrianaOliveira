<?php

class UsersController extends AppController{

    public $helpers = array('Html', 'Form');
    public $components = array('Flash', 'Session');


    public function lista_users(){
        $this->set('users', $this->User->find('all'));
    }

    public function view($id){
        if(!$id){
            $this->Flash->error(__('Usuário não foi encontrado!'));
        }
        $user = $this->User->findById($id);
        $this->set('users', $user);
    }


    public function add(){
        if($this->request->is('post')){
            $this->User->create();
            if($this->User->save($this->request->data)){
                $this->Flash->success(__('Você foi cadastrado(a) com sucesso! Efetue login!'));
                return $this->redirect(array('action' => 'login'));
            }
            $this->Flash->error(__('Cadastro não foi efetuado!'));
        }
    }

    public function edit($id = null){
        if(!$id){
            throw new NotFoundException(__('Usuário inválido'));
        }
        $user = $this->User->findById($id);
        if(!$user){
            throw new NotFoundException(__('Usuário inválido'));
        }
        if($this->request->is(array('post','put'))){
            $this->User->id = $id;
            if($this->User->save($this->request->data)){
                $this->Flash->success(__('Os dados pessoais foram alterados com sucesso! Efetue o login!'));
                $userInfo = $this->request->data;
                $this->Session->write('User',array(
                    'id' => $userInfo['User']['id'],
                    'name' => $userInfo['User']['name'],
                    'email' => $userInfo['User']['email']
                ));
                return $this->redirect(array(
                    'action' => 'login',
                    $this->Session->read('User.id')
                ));
            }
            $this->Flash->error(__('Os dados pessoais não foram alterados!'));
         }
         if(!$this->request->data){
             $this->request->data = $user;
         }
    }

    public function delete($id = null){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        if($this->User->delete($id)){
            $this->Flash->success(__('Usuário %s foi excluído com sucesso!', h($id)));
            return $this->redirect(array('action' => 'index'));
        }else{
            $this->Flash->error(__('Usuário %s não foi excluído!', h($id)));
        }
        return $this->redirect(array('action' => 'login'));
    }


    public function login_adm(){
        if(!empty($this->data['User']['email'])){
            $user = $this->validar_adm();
            if($user != false){
                $this->Flash->set('Acesso efetuado com sucesso!');
                $userInfo = $this->User->findByEmail($this->data['User']['email']);
                $this->Session->delete('User');
                $this->Session->write('User',array(
                  'id' => $userInfo['User']['id'],
                  'name' => $userInfo['User']['name'],
                  'email' => $userInfo['User']['email'],
                  'password' => $userInfo['User']['password'],
                  'type' => $userInfo['User']['type'],
                  'remember_token' => $userInfo['User']['remember_token'],
                  'shopping_carrinho' => []
                ));
                $this->redirect(array(
                    'controller' => 'users',
                    'action' => 'area_administrativa'
                ));
                exit();
            }else{
                $this->Flash->set('Usuário e/ou senha inválidos!');
                $this->redirect(array('controller' => 'users','action' => 'login_adm'));
                exit();

            }
        }
    }


    public function validar(){
        $user = $this->User->findAllByEmailAndPassword($this->data['User']['email'],
        ($this->data['User']['password']));
        if(!empty($user)){
            return $user;
        }else{
            return false;
        }
    }
    public function validar_adm(){
        $user = $this->User->findAllByEmailAndPassword($this->data['User']['email'],
        ($this->data['User']['password']));
        if(!empty($user)){
            return $user;
        }else{
            return false;
        }
    }

    public function area_do_cliente(){}
    public function area_administrativa(){}

    public function login(){
        if(!empty($this->data['User']['email'])){
            $user = $this->validar();
            if($user != false){
                $this->Flash->set('Acesso efetuado com sucesso!');
                $userInfo = $this->User->findByEmail($this->data['User']['email']);
                $this->Session->delete('User');
                $this->Session->write('User',array(
                  'id' => $userInfo['User']['id'],
                  'name' => $userInfo['User']['name'],
                  'email' => $userInfo['User']['email'],
                  'password' => $userInfo['User']['password'],
                  'type' => $userInfo['User']['type'],
                  'remember_token' => $userInfo['User']['remember_token'],
                  'shopping_carrinho' => []
                ));
                $this->redirect(array(
                    'controller' => 'users',
                    'action' => 'area_do_cliente'
                ));
                exit();
            }else{
                $this->Flash->set('Usuário e/ou senha inválidos!');
                $this->redirect(array('action' => 'login'));
                exit();

            }
        }
    }

    public function logout(){
        $this->Session->destroy();
        $this->Flash->set('Atividades encerradas com sucesso!');
        $this->redirect(array('controller' => 'pages'));
        exit();
    }


}
?>
