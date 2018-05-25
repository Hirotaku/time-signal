<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TimeSchedules Controller
 *
 *
 * @method \App\Model\Entity\TimeSchedule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TimeSchedulesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $timeSchedules = $this->paginate($this->TimeSchedules);

        $this->set(compact('timeSchedules'));
    }

    /**
     * View method
     *
     * @param string|null $id Time Schedule id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timeSchedule = $this->TimeSchedules->get($id, [
            'contain' => []
        ]);

        $this->set('timeSchedule', $timeSchedule);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $timeSchedule = $this->TimeSchedules->newEntity();
        if ($this->request->is('post')) {
            $timeSchedule = $this->TimeSchedules->patchEntity($timeSchedule, $this->request->getData());
            if ($this->TimeSchedules->save($timeSchedule)) {
                $this->Flash->success(__('The time schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The time schedule could not be saved. Please, try again.'));
        }
        $this->set(compact('timeSchedule'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Time Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timeSchedule = $this->TimeSchedules->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timeSchedule = $this->TimeSchedules->patchEntity($timeSchedule, $this->request->getData());
            if ($this->TimeSchedules->save($timeSchedule)) {
                $this->Flash->success(__('The time schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The time schedule could not be saved. Please, try again.'));
        }
        $this->set(compact('timeSchedule'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Time Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timeSchedule = $this->TimeSchedules->get($id);
        if ($this->TimeSchedules->delete($timeSchedule)) {
            $this->Flash->success(__('The time schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The time schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
