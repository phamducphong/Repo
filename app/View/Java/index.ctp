<h1>Javascript見出し</h1>

<?php 
/* Drop コーディング中
	$drop_event = '$(this).css("background-color",ui.draggable.css("background-color"));
			$(this).text(ui.draggable.text())';
	$this->Js->get('.drag')->
*/
?>

<?php 

	$this->Js->get('#img')->drag(array('opacity'=>0.5));
	echo $this->Js->writeBuffer();
	
	//echo $this->Html->div(null,'message',array('id'=>'msg','style'=>'width:100px;height:100px;background:#AAA;'));
	echo $this->Html->image('nhatrang.jpg',array('id'=>'img'));

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
