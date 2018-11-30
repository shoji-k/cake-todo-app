<h1><?= h($todo->title) ?></h1>
<p><?= h($todo->contents) ?></p>
<p><small>作成日時: <?= $todo->created->i18nFormat(); ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $todo->id]) ?></p>