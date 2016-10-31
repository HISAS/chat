<!DOCTYPE HTML>
<html lang="ja-JP">
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->css('cake.line');
        echo $scripts_for_layout;
    ?>
</head>
<body>
    <div id="container">
        <div id="header"></div>
        <div id="content">
            <?php echo $content_for_layout; ?>
        </div>
        <div id="footer"></div>
    </div>
</body>
</html>
