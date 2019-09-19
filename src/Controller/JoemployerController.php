<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Joemployer Controller
 *
 * @property \App\Model\Table\JoemployerTable $Joemployer
 *
 * @method \App\Model\Entity\Joemployer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JoemployerController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $jomaster = $this->Joemployer->Jomaster->find('all');

        $joemployer = $this->paginate($this->Joemployer);

        $this->set(compact('jomaster'));
        $this->set(compact('joemployer'));
    }

    /**
     * View method
     *
     * @param string|null $id Joemployer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $joemployer = $this->Joemployer->get($id, [
            'contain' => []
        ]);

        $this->set('joemployer', $joemployer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $joemployer = $this->Joemployer->newEntity();
        if ($this->request->is('post')) {
            $joemployer = $this->Joemployer->patchEntity($joemployer, $this->request->getData());
            if ($this->Joemployer->save($joemployer)) {
                $this->Flash->success(__('The joemployer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The joemployer could not be saved. Please, try again.'));
        }
        $this->set(compact('joemployer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Joemployer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $joemployer = $this->Joemployer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $joemployer = $this->Joemployer->patchEntity($joemployer, $this->request->getData());
            if ($this->Joemployer->save($joemployer)) {
                $this->Flash->success(__('The joemployer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The joemployer could not be saved. Please, try again.'));
        }
        $this->set(compact('joemployer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Joemployer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $joemployer = $this->Joemployer->get($id);
        if ($this->Joemployer->delete($joemployer)) {
            $this->Flash->success(__('The joemployer has been deleted.'));
        } else {
            $this->Flash->error(__('The joemployer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
