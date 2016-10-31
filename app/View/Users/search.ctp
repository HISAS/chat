<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('ユーザーを探す'); ?></legend>
        <?php
        echo $this->Form->input('username');
        ?>
    </fieldset>
<?php echo $this->Form->end(__('検索')); ?>
</div>
