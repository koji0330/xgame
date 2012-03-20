<!DOCTYPE html>
<html lang="ja">
<head>
<?php echo $this->Html->charset(); ?>
<title><?php echo $title_for_layout; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<?php
    echo $this->Html->css('http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css');
    echo $this->Html->css('style.css');
    echo $this->Html->script('http://code.jquery.com/jquery-1.7.1.min.js');
    echo $this->Html->script('http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js');
    echo $this->Html->script('jquery.mobile.xgame.js');
    echo $scripts_for_layout;
?>
</head>
<body>
<?php echo $content_for_layout; ?>
</body>
</html>
