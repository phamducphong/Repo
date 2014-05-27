<h1>Javascript見出し</h1>

<?php 
	$change = "$('#val').text(ui.value)";
	$this->Js->get('#slider')->slider(array('min'=>0,'max'=>100,'step'=>5,'slide'=>$change));
	echo $this->Js->writeBuffer();
	
	echo $this->Html->div(null,'value',array('id'=>'val','style'=>'font-size:18pt;'));
	echo $this->Html->div(null,'',array('id'=>'slider','style'=>'width:300px;'));
?>

<?php 
/*	Sortable List	
	$this->Js->get('#list')->sortable();
	echo $this->Js->writeBuffer();
	
	$style = $this->Html->style(array('background'=>'#FCC','margin'=>'3px','width'=>'300px'));
	
	$list = $this->Html->div(null,'message1',array('style'=>$style));
	$list .= $this->Html->div(null,'message2',array('style'=>$style));
	$list .= $this->Html->div(null,'message3',array('style'=>$style));
	echo $this->Html->div(null,$list,array('id'=>'list'));
*/
?>

<?php 
/*	Drop
	$drop_event = '$(this).css("background-color",ui.draggable.css("background-color"));
			$(this).text(ui.draggable.text())';
	$this->Js->get('.drag')->drag(array('opacity'=>0.5));
	$this->Js->get('.drop')->drop(array('drop'=>$drop_event));
	echo $this->Js->writeBuffer();
	
	echo $this->Html->div('drop','ドロップ',array('id'=>'blue',
			'style'=>'position:absolute; top:200px; left:300px; width:200px; height:200px; background:#AAA;'
	));
	
	echo $this->Html->div('drag','レッド',array('id'=>'red',
			'style'=>'width:100px; height:100px; background:#F66;'
	));
	
	echo $this->Html->div('drag','グリーン',array('id'=>'green',
			'style'=>'width:100px; height:100px; background:#9F9;'
	));
	
	echo $this->Html->div('drag','ブル',array('id'=>'blue',
			'style'=>'width:100px; height:100px; background:#33F;'
	));
*/
?>

<?php 
/*	Drag
	$this->Js->get('#img')->drag(array('opacity'=>0.5));
	echo $this->Js->writeBuffer();
	
	//echo $this->Html->div(null,'message',array('id'=>'msg','style'=>'width:100px;height:100px;background:#AAA;'));
	echo $this->Html->image('nhatrang.jpg',array('id'=>'img'));
*/
?>

<?php 
/* Image
	$eventCode = $this->Js->get('#img')->effect('slideOut');
	$this->Js->get('#img')->event('click',$eventCode);
	
	$eventCode2 = $this->Js->get('#img')->effect('slideIn');
	$this->Js->get('#msg')->event('click',$eventCode2);
	
	echo $this->Js->writeBuffer(array('inline'=>false));
	
	echo $this->Html->div(null,'show Nha Trang beach',array('id'=>'msg'));
	echo $this->Html->image('nhatrang.jpg',array('id'=>'img'));
*/
?>

<?php
/*
$script =<<< EOL
function testFunc(str){
	alert(str);
}
EOL;

	echo $this->Html->scriptBlock($script, array('inline'=>true, 'safe'=>true));
	$this->Js->get('#click_div');
	$this->Js->event('click', 'testFunc("click_div")');
	echo $this->Js->writeBuffer();
	
	//echo $this->Html->div(null,'JavaScript Test!', array('id'=>'JavaScript_div','style'=>'background-color:#aaffaa', 'onclick'=>'alert("hello")'));
	//echo $this->Html->div(null,'Function Test!', array('id'=>'Function_div','style'=>'background-color:#aaffff', 'onclick'=>'testFunc("Function div clicked")'));
	
	echo $this->Html->div(null,'Click Test!', array('id'=>'click_div','style'=>'background-color:#aaffaa'));

	
	echo $this->Html->div(null,'This is Ajax Result.',array('id'=>'res_div'));
	
	echo $this->Js->link('click here', array('action'=>'getAjax'), array('update'=>'#res_div'));
	echo $this->Js->writeBuffer();
*/
	/*
	echo $this->Form->create('Post');
	echo $this->Form->input('msg');
	echo $this->Js->submit('click',array(
			'update'=>'#res_div',
			'url'=>array('action'=>'getAjax')
	));
	echo $this->Form->end(null);
	echo $this->Js->writeBuffer();
	*/
	/*
	$this->Js->get('#ajax_div')->event('click',
			$this->Js->request(
					array('action'=>'getAjax'),
					array('async'=>true, 'update'=>'#res_div')
			)
	);
	
	echo $this->Js->writeBuffer();
	
	echo $this->Html->div(nul, 'This is ajax Result', array('id'=>'res_div'));
	echo $this->Form->button('Ajaxによる更新',array('id'=>'ajax_div'));
	

$script2 =<<< EOL
function testFunc2(result){
	$('#res_div').html(result.responseText);
}
EOL;
	
	echo $this->Html->scriptBlock($script2, array('inline'=>true, 'safe'=>true));
	
	$d = 10;
	$h = 10;
	$this->Js->get('#ajax_div')->event('click',
			$this->Js->request(
					array('action'=>'getAjax', $d, $h),
					array(
							'async'=>true,
							'complete'=>'testFunc2(XMLHttpRequest)')
			)
	);
	echo $this->Js->writeBuffer();
	
	echo $this->Html->div(nul, 'This is ajax Result', array('id'=>'res_div'));
	echo $this->Form->button('Ajaxによる更新',array('id'=>'ajax_div'));
*/
?>
