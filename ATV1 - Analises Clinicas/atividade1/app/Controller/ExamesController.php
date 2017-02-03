<?php

class ExamesController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');

  public function solicitar(){
    $this->set('procedimentos', $this->Exame->Procedimento->find('all', array('order' => array('Procedimento.nome ASC'))));
  }

  public function salvar_exames($id){
    $codpaci = $this->Session->read('Paciente');

      if (empty($this->request->data)) {
        $procedimentos = $this->Exame->Procedimento->findById($id);
        $this->set('procedimento', $procedimentos);
      }
      else{
        $this->request->data['Exame']['procedimento_id'] = $id;
        $this->request->data['Exame']['paciente_id'] = $codpaci[0]['Paciente']['id'] ;

        if ($this->Exame->save($this->request->data)) {
        $this->Flash->set('Exame gravado com Sucesso !');
        $this->redirect(array('action' => 'relacao_exames'));
        }
      }

  }

  public function edit_exame($id){
    if (empty($this->request->data)) {
      $this->set('exames', $this->Exame->find('all', array('conditions'=> array('Exame.id' => $id))));
    }else {
      $this->request->data['Exame']['id'] = $id;
          if ($this->Exame->save($this->request->data)) {
              $this->Flash->set('Exame editado com sucesso !!!');
              $this->set('exames', $this->Exame->find('all', array('conditions'=> array('Exame.id' => $id))));
            }
      }
    }



  public function relacao_exames() {
    $id = $this->Session->read('Paciente');

    $this->set('exames', $this->Exame->find('all',
    array('conditions'=> array('Paciente.id' => $id[0]['Paciente']['id']), 'order' => array('Exame.data DESC','Procedimento.nome ASC' )),
    array('recursive' => 2)));
  }



  public function visual_exame(){
    $this->set('exames', $this->Exame->find('all', array('order' => array('Exame.data DESC'), array('recursive' => 2))));
  }

  public function lista_completa(){
    $this->set('exames', $this->Exame->find('all', array('recursive' => 2), array('order' => array('Paciente.nome ASC', 'Procedimento.nome ASC'))));
  }

  public function visual_proced($id){

    $this->set('exames', $this->Exame->find('all',
    array('conditions'=> array('Procedimento.id' => $id), 'order' => array('Exame.data DESC','Procedimento.nome ASC' )),
    array('recursive' => 2)));

  }

  public function visual_paciente($id){

    $this->set('exames', $this->Exame->find('all',
    array('conditions'=> array('Paciente.id' => $id), 'order' => array('Exame.data DESC','Procedimento.nome ASC' )),
    array('recursive' => 2)));

  }

  public function geral_exame(){
      $this->set('exames', $this->Exame->find('all', array('order' => array('Exame.data DESC'), array('recursive' => 2))));
  }


    public function delet($id){
      $this->Exame->delete($id);

      $this->Flash->set('Exame excluído com Sucesso !');
      $this->redirect(array('action' => 'geral_exame'));

    }

}
?>
