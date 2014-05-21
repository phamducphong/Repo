<!DOCTYPE html>
<html>
<head>
	<meta http-equiv ="content-type" content="tetx/html charset=UTF-8">
	<title>Hello index</title>
</head>
<body>
	<h1>サンプル見出し</h1>
	<p>フォームの送信</p>
	<br><br>
	
	<p>
		<?php echo $result; ?>
	</p>
	<br/>
	<?php 
		echo $this->Form->create(false, array('type'=>'post','action'=>'.'));
		echo $this->Form->text("HelloForm.text1");
		echo $this->Form->checkbox("HelloForm.check1") . "確認";
		echo $this->Form->radio("HelloForm.radio1", array("Windows"=>'Windows','Linux'=>'Linux','Mac'=>'MacOS'),
													array('legend'=>'OSを選択','value'=>'Linux'));
		echo $this->Form->select("HelloForm.select1",array("Windows"=>'Windows','Linux'=>'Linux','Mac'=>'MacOS'),
													array('empty'=>'項目を選んでください。','size'=>3));

		echo $this->Form->value("HelloForm.text1");
		
		
		echo $this->Form->submit("送信");
		echo $this->Form->end();
	?>
	
	<!-- 
	<form method="post" action="./other">
		<input type="text" name="text1" /><br>
		<input type="checkbox" name="check1" />チェック<br>
		<input type="radio" name="radio1" value="No.1" />ラジオ１<br>
		<input type="radio" name="radio1" value="No.2" />ラジオ2<br>
		<select name="select1">
			<option value="Windows">Windows</option>
			<option value="Linux">Linux</option>
			<option value="MacOS">MacOS</option>
		</select>
		<input type="submit" />
	</form>
	-->
	
</body>
</html>