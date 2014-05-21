<!DOCTYPE html>
<html lang="ja">
<head>
	<?php echo $this->Html->charset();?>
	<title>
		<?php echo $title_for_layout;?>
	</title>
	<?php 
		echo $this->Html->css('cake.hello2');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">** Header **</div>
		<div id="content">
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">** Footer **</div>
	</div>
</body>
</html>