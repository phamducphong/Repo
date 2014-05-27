<!DOCTYPE html>
<html>
<head>
	<meta http-equiv ="content-type" content="tetx/html charset=UTF-8">
	<title>Boards</title>
</head>
<body>
	<h1>掲示板</h1>
	<br /><a href="/cake/Boards/index">※一覧に戻る</a>
	<br><hr><br>
	
	<table>
		<?php 
			echo "<tr><th>投稿者</th><td>{$data[0]['Personal']['name']}</td></tr>";
			echo "<tr><th>タイトル</th><td>{$data[0]['Board']['title']}</td></tr>";
			echo "<tr><th>内容</th><td>{$data[0]['Board']['content']}</td></tr>";
			$id = $data[0]['Board']['id'];
		?>
	</table>
	
	<br /><a href="/cake/Boards/edit/<?php echo $id;?>">※この投稿を編集する</a>
</body>
</html>