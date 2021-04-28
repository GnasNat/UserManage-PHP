<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

// the Text class
use Cake\Utility\Text;

// the EventInterface class
use Cake\Event\EventInterface;

// the Validator class
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }
    
    // Add the following method.
    public function validationDefault(Validator $validator): Validator
    {
    $validator
        ->notEmptyString('email')
        ->minLength('email', 6)
        ->maxLength('email', 30)

        ->notEmptyString('name')
        ->minLength('name', 2)
        ->maxLength('name', 30);

    	return $validator;
    }
       
}


