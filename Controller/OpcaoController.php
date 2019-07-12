<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Opcao Controller
 *
 * @property \App\Model\Table\OpcaoTable $Opcao
 *
 * @method \App\Model\Entity\Opcao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpcaoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $opcao = $this->paginate($this->Opcao);

        $this->set(compact('opcao'));
    }

    /**
     * View method
     *
     * @param string|null $id Opcao id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opcao = $this->Opcao->get($id, [
            'contain' => ['Questao']
        ]);

        $this->set('opcao', $opcao);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opcao = $this->Opcao->newEntity();
        if ($this->request->is('post')) {
            $opcao = $this->Opcao->patchEntity($opcao, $this->request->getData());
            if ($this->Opcao->save($opcao)) {
                $this->Flash->success(__('The opcao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opcao could not be saved. Please, try again.'));
        }
        $questao = $this->Opcao->Questao->find('list', ['limit' => 200]);
        $this->set(compact('opcao', 'questao'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Opcao id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opcao = $this->Opcao->get($id, [
            'contain' => ['Questao']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opcao = $this->Opcao->patchEntity($opcao, $this->request->getData());
            if ($this->Opcao->save($opcao)) {
                $this->Flash->success(__('The opcao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opcao could not be saved. Please, try again.'));
        }
        $questao = $this->Opcao->Questao->find('list', ['limit' => 200]);
        $this->set(compact('opcao', 'questao'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Opcao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opcao = $this->Opcao->get($id);
        if ($this->Opcao->delete($opcao)) {
            $this->Flash->success(__('The opcao has been deleted.'));
        } else {
            $this->Flash->error(__('The opcao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
