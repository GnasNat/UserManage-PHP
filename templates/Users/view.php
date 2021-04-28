<!-- File: templates/Users/view.php -->

<h1>Name: <?=  h($user->name) ?></h1>
<h1>Email: <?=  h($user->email) ?></h1>
<p><small>Created: <?= $user->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?></p>
