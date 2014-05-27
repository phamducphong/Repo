<h1>掲示板</h1>
<br /><a href="/cake/Boards/add">※投稿する</a>
<br><hr><br>


<table>
<tr><th>投稿者</th><th>タイトル</th></tr>
	<?php 
		for ($i = 0; $i < count($data); $i++){
			$arr = $data[$i];
			echo "<tr>";
			echo "<td><a href='/cake/Boards/show2/{$arr['Personal']['id']}'>{$arr['Personal']['name']}</a></td>";
			echo "<td><a href='/cake/Boards/show/{$arr['Board']['id']}'>{$arr['Board']['title']}</a></td>";
			echo "</tr>";
		}
	
	?>
</table>
