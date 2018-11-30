<?php
namespace App\Controller;

class TodosController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $todos = $this->Paginator->paginate($this->Todos->find());
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
}