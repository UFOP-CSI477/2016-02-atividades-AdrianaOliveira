<?php
App::uses('AppController', 'Controller');

class CartsController extends AppController {

	public $uses = array('Produto','Cart');
	public $components = array('Flash');

	public function add() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Cart->addProduct($this->request->data['Cart']['id']);
		}
		$this->Flash->success(__('Produto adicionado ao carrinho'));
		$this->redirect(array(
			'controller' => 'produtos',
			'action' => 'lista_produtos'
		));
	}

	public function view() {
		$carts = $this->Cart->readProduct();
		$products = array();
		if (null!=$carts) {
			foreach ($carts as $productId => $count) {
				$produto = $this->Produto->findById($productId);
				$produto['Produto']['count'] = $count;
				$products[]=$produto;
			}
		}
		$this->set('produtos', $products);
	}

	public function carrinho_completo() {
		$carts = $this->Cart->readProduct();
		$products = array();
		if (null!=$carts) {
			foreach ($carts as $productId => $count) {
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
				$cart = array();
				$data = $this->request->data['Cart'];
				foreach ($data['count'] as $index => $c) {
					if ($c>0) {
						$cart[$data['id'][$index]] = $c;
					}
				}
				$this->Cart->saveProduct($cart);
				$this->redirect(array('controller' => 'compras', 'action'=>'comprar'));
			}
		}
	}


}
