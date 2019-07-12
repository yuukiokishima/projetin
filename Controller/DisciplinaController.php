<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Disciplina Controller
 *
 * @property \App\Model\Table\DisciplinaTable $Disciplina
 *
 * @method \App\Model\Entity\Disciplina[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DisciplinaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $disciplina = $this->paginate($this->Disciplina);

        $this->set(compact('disciplina'));
    }

    /**
     * View method
     *
     * @param string|null $id Disciplina id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $disciplina = $this->Disciplina->get($id, [
            'contain' => ['Prova', 'DisciplinaProfessor']
        ]);

        $this->set('disciplina', $disciplina);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $disciplina = $this->Disciplina->newEntity();
        if ($this->request->is('post')) {
            $disciplina = $this->Disciplina->patchEntity($disciplina, $this->request->getData());
            if ($this->Disciplina->save($disciplina)) {
                $this->Flash->success(__('The disciplina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disciplina could not be saved. Please, try again.'));
        }
        $prova = $this->Disciplina->Prova->find('list', ['limit' => 200]);
        $this->set(compact('disciplina', 'prova'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Disciplina id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $disciplina = $this->Disciplina->get($id, [
            'contain' => ['Prova']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disciplina = $this->Disciplina->patchEntity($disciplina, $this->request->getData());
            if ($this->Disciplina->save($disciplina)) {
                $this->Flash->success(__('The disciplina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disciplina could not be saved. Please, try again.'));
        }
        $prova = $this->Disciplina->Prova->find('list', ['limit' => 200]);
        $this->set(compact('disciplina', 'prova'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Disciplina id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $disciplina = $this->Disciplina->get($id);
        if ($this->Disciplina->delete($disciplina)) {
            $this->Flash->success(__('The disciplina has been deleted.'));
        } else {
            $this->Flash->error(__('The disciplina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
