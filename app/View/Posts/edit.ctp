<h1>Edit Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('message');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>
