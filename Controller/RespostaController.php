<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Resposta Controller
 *
 * @property \App\Model\Table\RespostaTable $Resposta
 *
 * @method \App\Model\Entity\Respostum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RespostaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $resposta = $this->paginate($this->Resposta);

        $this->set(compact('resposta'));
    }

    /**
     * View method
     *
     * @param string|null $id Respostum id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $respostum = $this->Resposta->get($id, [
            'contain' => ['Questao']
        ]);

        $this->set('respostum', $respostum);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $respostum = $this->Resposta->newEntity();
        if ($this->request->is('post')) {
            $respostum = $this->Resposta->patchEntity($respostum, $this->request->getData());
            if ($this->Resposta->save($respostum)) {
                $this->Flash->success(__('The respostum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The respostum could not be saved. Please, try again.'));
        }
        $questao = $this->Resposta->Questao->find('list', ['limit' => 200]);
        $this->set(compact('respostum', 'questao'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Respostum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $respostum = $this->Resposta->get($id, [
            'contain' => ['Questao']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $respostum = $this->Resposta->patchEntity($respostum, $this->request->getData());
            if ($this->Resposta->save($respostum)) {
                $this->Flash->success(__('The respostum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The respostum could not be saved. Please, try again.'));
        }
        $questao = $this->Resposta->Questao->find('list', ['limit' => 200]);
        $this->set(compact('respostum', 'questao'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Respostum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $respostum = $this->Resposta->get($id);
        if ($this->Resposta->delete($respostum)) {
            $this->Flash->success(__('The respostum has been deleted.'));
        } else {
            $this->Flash->error(__('The respostum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
