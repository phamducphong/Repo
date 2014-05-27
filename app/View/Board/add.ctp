<!DOCTYPE html>
<html>
<head>
	<meta http-equiv ="content-type" content="tetx/html charset=UTF-8">
	<title>Boards</title>
</head>
<body>
	<h1>投稿フォーム</h1>
	<br /><a href="/cake/Boards/index">※一覧に戻る</a>
	<br><hr><br>
	
	<?php 
		
		echo $this->Form->create(false,array('type'=>'post','action'=>''));
		
		echo '名前' . $this->Form->text('Personal.name');
		echo $this->Form->error('Personal.name');
		
		echo 'パスワード' . $this->Form->password('Personal.password');
		echo $this->Form->error('Personal.password');
		
		echo 'タイトル' . $this->Form->text('Board.title');
		echo $this->Form->error('Board.title');
		
		echo '内容' . $this->Form->text('Board.content');
		echo $this->Form->error('Board.content');
		
		echo $this->Form->end('送信');
		
	?>
</body>
</html>