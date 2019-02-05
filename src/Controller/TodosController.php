<?php
namespace App\Controller;

class TodosController extends AppController
{
    public function index()
    {
        $todos = $this->Todos->find();
        $this->set(compact('todos'));
    }

    public function add()
    {
        $todo = $this->Todos->newEntity();
        if ($this->request->is('post')) {
            $todo = $this->Todos->patchEntity($todo, $this->request->getData());

            if ($this->Todos->save($todo)) {
                $this->Flash->success(__('Your todo has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your todo.'));
        }
        $this->set('todo', $todo);
    }

    public function view($id)
    {
        $todo = $this->Todos->get($id); // throw NotFoundException
        $this->set(compact('todo'));
    }
    
    public function edit($id)
    {
        $todo = $this->Todos->get($id); // throw NotFoundException
        if ($this->request->is(['post', 'put'])) {
            $this->Todos->patchEntity($todo, $this->request->getData());
            if ($this->Todos->save($todo)) {
                $this->Flash->success(__('Your todo has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your todo.'));
        }
        $this->set(compact('todo'));
    }
    
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);
    
        $todo = $this->Todos->get($id);
        if ($this->Todos->delete($todo)) {
            $this->Flash->success(__('The {0} todo has been deleted.', $todo->title));
            return $this->redirect(['action' => 'index']);
        }
    }
}
