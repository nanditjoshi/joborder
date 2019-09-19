<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jomaster Controller
 *
 * @property \App\Model\Table\JomasterTable $Jomaster
 *
 * @method \App\Model\Entity\Jomaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JomasterController extends AppController
{


    public function isAuthorized($user)
    {
        if($_SESSION['Auth']['User']['usertype'] == 'Admin')
        {

            $this->Auth->allow();
            return true;

        }else{

            $action = $this->request->getParam('action');
            // The add and tags actions are always allowed to logged in users.
            if (in_array($action, ['index','edit'])) {
                return true;
            }

        }    
        
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $jomaster = $this->paginate($this->Jomaster);

        if($_SESSION['Auth']['User']['usertype'] == 'Employer'){

            $colum = 'employer';

        }else if($_SESSION['Auth']['User']['usertype'] == 'Agency'){

             $colum = 'agencies';   
        }

        if($_SESSION['Auth']['User']['usertype'] == 'Admin')
        {
            $jomaster = $this->Jomaster->find('all');
        }else{
            $jomaster = $this->Jomaster->find('all', array('conditions'=> 
           array("$colum REGEXP" => "[[:<:]]".$_SESSION['Auth']['User']['id']."[[:>:]]")));    
        } 
        
        $this->set(compact('jomaster'));
    }

    /**
     * View method
     *
     * @param string|null $id Jomaster id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jomaster = $this->Jomaster->get($id, [
            'contain' => []
        ]);

        $this->set('jomaster', $jomaster);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jomaster = $this->Jomaster->newEntity();
        if ($this->request->is('post')) {
            $jomaster = $this->Jomaster->patchEntity($jomaster, $this->request->getData());

            $agencies = implode(',', $this->request->getData('agencies'));
            $jomaster->agencies = $agencies;
            
            if ($this->Jomaster->save($jomaster)) {
                $this->Flash->success(__('The jomaster has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jomaster could not be saved. Please, try again.'));
        }
        
        $employer = $this->Jomaster->Users->find('all',['conditions' => ['usertype' => 'Employer']]);
        $agencies = $this->Jomaster->Users->find('all',['conditions' => ['usertype' => 'Agency']]);

		
		$this->set('employer', $employer);
		$this->set('agencies', $agencies);
		$this->set(compact('jomaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jomaster id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jomaster = $this->Jomaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jomaster = $this->Jomaster->patchEntity($jomaster, $this->request->getData());
            if ($this->Jomaster->save($jomaster)) {
                $this->Flash->success(__('The jomaster has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jomaster could not be saved. Please, try again.'));
        }
        $this->set(compact('jomaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jomaster id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jomaster = $this->Jomaster->get($id);
        if ($this->Jomaster->delete($jomaster)) {
            $this->Flash->success(__('The jomaster has been deleted.'));
        } else {
            $this->Flash->error(__('The jomaster could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
