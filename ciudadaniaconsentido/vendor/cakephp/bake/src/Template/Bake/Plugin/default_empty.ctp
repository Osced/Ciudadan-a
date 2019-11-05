<?php
/* @var $this View */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
        <?= $this->fetch('title') ?>
		</title>
		
		<?php
		echo $this->fetch('meta');
		
		echo $this->Html->css('general');
		echo $this->Html->css('utilidades/w3');	;		
		echo $this->fetch('css');
		
		echo $this->Html->script('jquery/jquery-3.3.1.min');
		echo $this->Html->script('default');
		echo $this->fetch('script');
		?>
		
		
	</head>
	<body>
		<?= $this->fetch('content') ?>
	</body>
</html>