<!-- File: templates/Users/edit.php -->

<h1>Edit User</h1>
<?php
    echo $this->Form->create($user);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('name');
    echo $this->Form->control('email');
    echo $this->Form->button(__('Save User'));
    echo $this->Form->end();
?>
