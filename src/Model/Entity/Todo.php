<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Todo extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}