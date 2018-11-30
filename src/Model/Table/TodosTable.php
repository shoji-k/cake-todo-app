<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class TodosTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}