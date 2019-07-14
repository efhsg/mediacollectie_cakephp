<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Schijven Controller
 *
 * @property \App\Model\Table\SchijvenTable $Schijven
 *
 * @method \App\Model\Entity\Schijven[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SchijvenController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $schijven = $this->paginate($this->Schijven);

        $this->set(compact('schijven'));
    }

    /**
     * View method
     *
     * @param string|null $id Schijven id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schijven = $this->Schijven->get($id, [
            'contain' => []
        ]);

        $this->set('schijven', $schijven);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schijven = $this->Schijven->newEntity();
        if ($this->request->is('post')) {
            $schijven = $this->Schijven->patchEntity($schijven, $this->request->getData());
            if ($this->Schijven->save($schijven)) {
                $this->Flash->success(__('The schijven has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schijven could not be saved. Please, try again.'));
        }
        $this->set(compact('schijven'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Schijven id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schijven = $this->Schijven->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schijven = $this->Schijven->patchEntity($schijven, $this->request->getData());
            if ($this->Schijven->save($schijven)) {
                $this->Flash->success(__('The schijven has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schijven could not be saved. Please, try again.'));
        }
        $this->set(compact('schijven'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Schijven id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schijven = $this->Schijven->get($id);
        if ($this->Schijven->delete($schijven)) {
            $this->Flash->success(__('The schijven has been deleted.'));
        } else {
            $this->Flash->error(__('The schijven could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
