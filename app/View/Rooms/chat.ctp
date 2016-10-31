<title>Chats</title>
<div id="wrapper">
    <?php foreach ($posts as $post): ?>
        <?php if ($post['Post']['user_id'] == $user["id"]): ?>
            <div class="question_box">
                <p class="name"><?php echo $user['username']; ?>　<?php echo date('G:i', strtotime($post['Post']['modified']));?></p>
                <div id="arrow_question"><?php echo $post['Post']['message']; ?></div>
            </div>
        <?php else: ?>
            <div class="answer_box">
                <p class="name02"><?php echo $receiver['User']['username']; ?>　<?php echo date('G:i', strtotime($post['Post']['modified']));?></p>
                <div id="arrow_answer"><?php echo $post['Post']['message']; ?></div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php
        echo $this->Form->create('Room', array('action' => 'ajax'));
        echo $this->Form->text('messeage');
        echo $this->Form->submit('Send', array('id' => 'formSubmit'));
        echo $this->Form->end();
    ?>
    <div id='messageArea'></div>
    <ul id='lastUpdate'></ul>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#formSubmit').click(function(){
        var data = {
            "messeage" : $('#RoomMesseage').val()
        };
        console.log(data);
        $.ajax({
            type: 'POST',
            url: '<?php echo $this->Html->url(null, true); ?>',
            data: data,
        })
        .done(function(response){
            console.log(response);
            console.log(response.data);
            alert('成功');
            var jsonObj = $.parseJSON(data);
            console.log(jsonObj);
            alert(jsonObj);
            var msg = $('<div/>').attr('id', 'arrow_answer').text(response.data).fadeIn();
            $('#messageArea').append(msg);
        })
        .fail(function(){
            alert('失敗');
        });
    });

});

</script>
