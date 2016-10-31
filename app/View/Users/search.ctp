<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('ユーザーを探す'); ?></legend>
        <?php
        echo $this->Form->input('username');
        ?>
    </fieldset>
<?php echo $this->Form->end(__('検索')); ?>
<br><br><br>
<?php if(!empty($user)): ?>
    <h3>ユーザー名:<?php echo $user['User']['username']; ?></h3>
    <p><a href="/rooms/add/<?php echo $user['User']['id']; ?>" >追加する</a></p>
<?php endif; ?>
</div>
