<h1>TODO追加</h1>
<?php
    echo $this->Form->create($todo);
    echo $this->Form->control('title');
    echo $this->Form->control('contents', ['rows' => '3']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>