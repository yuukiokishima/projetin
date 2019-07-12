<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Prova Controller
 *
 * @property \App\Model\Table\ProvaTable $Prova
 *
 * @method \App\Model\Entity\Prova[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProvaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $prova = $this->paginate($this->Prova);

        $this->set(compact('prova'));
    }

    /**
     * View method
     *
     * @param string|null $id Prova id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prova = $this->Prova->get($id, [
            'contain' => ['Disciplina', 'Questao', 'AlunoProva', 'ProfessorProva', 'RelacaoAlunoProva']
        ]);

        $this->set('prova', $prova);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prova = $this->Prova->newEntity();
        if ($this->request->is('post')) {
            $prova = $this->Prova->patchEntity($prova, $this->request->getData());
            if ($this->Prova->save($prova)) {
                $this->Flash->success(__('The prova has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prova could not be saved. Please, try again.'));
        }
        $disciplina = $this->Prova->Disciplina->find('list', ['limit' => 200]);
        $questao = $this->Prova->Questao->find('list', ['limit' => 200]);
        $this->set(compact('prova', 'disciplina', 'questao'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prova id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prova = $this->Prova->get($id, [
            'contain' => ['Disciplina', 'Questao']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prova = $this->Prova->patchEntity($prova, $this->request->getData());
            if ($this->Prova->save($prova)) {
                $this->Flash->success(__('The prova has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prova could not be saved. Please, try again.'));
        }
        $disciplina = $this->Prova->Disciplina->find('list', ['limit' => 200]);
        $questao = $this->Prova->Questao->find('list', ['limit' => 200]);
        $this->set(compact('prova', 'disciplina', 'questao'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prova id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prova = $this->Prova->get($id);
        if ($this->Prova->delete($prova)) {
            $this->Flash->success(__('The prova has been deleted.'));
        } else {
            $this->Flash->error(__('The prova could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
