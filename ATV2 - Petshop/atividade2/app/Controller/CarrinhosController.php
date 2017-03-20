<?php
App::uses('AppController', 'Controller');

class CarrinhosController extends AppController {

	public $uses = array('Produto','Carrinho');
	public $components = array('Flash');

	public function add_user() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Carrinho->addProduct($this->request->data['Carrinho']['id']);
		}
		$this->Flash->success(__('Produto foi adicionado ao carrinho com sucesso!'));
		$this->redirect(array(
			'controller' => 'produtos',
			'action' => 'visualiza_produtos_cliente'
		));
	}

	public function add() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Carrinho->addProduct($this->request->data['Carrinho']['id']);
		}
		$this->Flash->success(__('Produto adicionado ao carrinho com sucesso! Efetue login para na ÁREA DO CLIENTE para finalizar a compra!'));
		$this->redirect(array(
			'controller' => 'produtos',
			'action' => 'visualiza_produtos'
		));
	}

	public function visualiza_carrinho() {
		$carrinho = $this->Carrinho->readProduct();
		$products = array();
		if (null!=$carrinho) {
			foreach ($carrinho as $productId => $count) {
				$produto = $this->Produto->findById($productId);
				$produto['Produto']['count'] = $count;
				$products[]=$produto;
			}
		}
		$this->set('produtos', $products);
	}

	public function carrinho_completo() {
		$carrinho = $this->Carrinho->readProduct();
		$products = array();
		if (null!=$carrinho) {
			foreach ($carrinho as $productId => $count) {
				$produto = $this->Produto->findById($productId);
				$produto['Produto']['count'] = $count;
				$products[]=$produto;
			}
		}
		$this->set('produtos', $products);
	}

	public function comprar() {
		if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				$carrinho = array();
				$data = $this->request->data['Carrinho'];
				foreach ($data['count'] as $index => $c) {
					if ($c>0) {
						$carrinho[$data['id'][$index]] = $c;
					}
				}
				$this->Carrinho->saveProduct($carrinho);
				$this->redirect(array('controller' => 'compras', 'action'=>'comprar'));
			}
		}
	}


}
