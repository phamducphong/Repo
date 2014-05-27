<!DOCTYPE html>
<html>
<head>
	<meta http-equiv ="content-type" content="tetx/html charset=UTF-8">
	<title>Boards</title>
</head>
<body>
	<h1>送信フォーム・サンプル見出し</h1>
	
	<?php 
	echo $this->Form->create(false, array('type'=>'post', 'action'=>'addRecord'));
	echo $this->Form->text("Board.name");
	echo $this->Form->error("Board.name");
	echo $this->Form->text("Board.title");
	echo $this->Form->error("Board.title");
	echo $this->Form->textarea("Board.content");
	echo $this->Form->error("Board.content");
	echo $this->Form->submit("送信");
	echo $this->Form->end();
	?>
	
	<br><hr><br>
	
	<table>
		<?php 
		/*
			for ($i = 0; $i < count($result); $i++){
				$arr = $result[$i]['Board'];
				echo "<tr><td>{$arr['id']}</td>";
				echo "<td>{$arr['name']}</td>";
				echo "<td>{$arr['title']}</td>";
				echo "<td>{$arr['content']}</td>";
			}
		*/
		?>
	</table>
</body>
</html>