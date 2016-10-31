<section>
    <h3><a href="/users/register">新規登録はコチラ</a></h3>
</section>

<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        ?>
    </fieldset>
<?php echo $this->Form->end(__('ログイン')); ?>

</div>
