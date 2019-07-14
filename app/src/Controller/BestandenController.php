<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bestanden Controller
 *
 * @property \App\Model\Table\BestandenTable $Bestanden
 *
 * @method \App\Model\Entity\Bestanden[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BestandenController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $bestanden = $this->paginate($this->Bestanden);

        $this->set(compact('bestanden'));
    }

    /**
     * View method
     *
     * @param string|null $id Bestanden id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bestanden = $this->Bestanden->get($id, [
            'contain' => []
        ]);

        $this->set('bestanden', $bestanden);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bestanden = $this->Bestanden->newEntity();
        if ($this->request->is('post')) {
            $bestanden = $this->Bestanden->patchEntity($bestanden, $this->request->getData());
            if ($this->Bestanden->save($bestanden)) {
                $this->Flash->success(__('The bestanden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bestanden could not be saved. Please, try again.'));
        }
        $this->set(compact('bestanden'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bestanden id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bestanden = $this->Bestanden->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bestanden = $this->Bestanden->patchEntity($bestanden, $this->request->getData());
            if ($this->Bestanden->save($bestanden)) {
                $this->Flash->success(__('The bestanden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bestanden could not be saved. Please, try again.'));
        }
        $this->set(compact('bestanden'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bestanden id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bestanden = $this->Bestanden->get($id);
        if ($this->Bestanden->delete($bestanden)) {
            $this->Flash->success(__('The bestanden has been deleted.'));
        } else {
            $this->Flash->error(__('The bestanden could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
