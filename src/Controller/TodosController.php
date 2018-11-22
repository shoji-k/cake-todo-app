<?php
namespace App\Controller;
use App\Controller\AppController;

class TodosController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $todos = $this->Paginator->paginate($this->Todos->find());
        $this->set(compact('todos'));
    }
}