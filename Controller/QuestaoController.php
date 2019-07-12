<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questao Controller
 *
 * @property \App\Model\Table\QuestaoTable $Questao
 *
 * @method \App\Model\Entity\Questao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestaoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $questao = $this->paginate($this->Questao);

        $this->set(compact('questao'));
    }

    /**
     * View method
     *
     * @param string|null $id Questao id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questao = $this->Questao->get($id, [
            'contain' => ['Opcao', 'Prova', 'Resposta']
        ]);

        $this->set('questao', $questao);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questao = $this->Questao->newEntity();
        if ($this->request->is('post')) {
            $questao = $this->Questao->patchEntity($questao, $this->request->getData());
            if ($this->Questao->save($questao)) {
                $this->Flash->success(__('The questao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questao could not be saved. Please, try again.'));
        }
        $opcao = $this->Questao->Opcao->find('list', ['limit' => 200]);
        $prova = $this->Questao->Prova->find('list', ['limit' => 200]);
        $resposta = $this->Questao->Resposta->find('list', ['limit' => 200]);
        $this->set(compact('questao', 'opcao', 'prova', 'resposta'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Questao id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questao = $this->Questao->get($id, [
            'contain' => ['Opcao', 'Prova', 'Resposta']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questao = $this->Questao->patchEntity($questao, $this->request->getData());
            if ($this->Questao->save($questao)) {
                $this->Flash->success(__('The questao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questao could not be saved. Please, try again.'));
        }
        $opcao = $this->Questao->Opcao->find('list', ['limit' => 200]);
        $prova = $this->Questao->Prova->find('list', ['limit' => 200]);
        $resposta = $this->Questao->Resposta->find('list', ['limit' => 200]);
        $this->set(compact('questao', 'opcao', 'prova', 'resposta'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Questao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questao = $this->Questao->get($id);
        if ($this->Questao->delete($questao)) {
            $this->Flash->success(__('The questao has been deleted.'));
        } else {
            $this->Flash->error(__('The questao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
