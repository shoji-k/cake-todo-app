<h1>編集</h1>
<?php
    echo $this->Form->create($todo);
    //echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    echo $this->Form->control('contents', ['rows' => '3']);
    echo $this->Form->button(__('Save Todo'));
    echo $this->Form->end();
?>