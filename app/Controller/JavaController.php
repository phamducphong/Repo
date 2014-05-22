<?php
class JavaController extends AppController{
	public $name = 'Java';
	public $helpers = array('Js');
	public $components = array('RequestHandler');
	
	public function index(){
		Configure::write('debug',0);
	}
	
	public function getAjax($day = 0, $hour = 0){
		$this->autoRender = false;
		$this->uses = null;
		Configure::write('debug',0);
		$pattern = $this->request->data['Post']['msg'];
		if(empty($pattern)){
			$pattern = 'Y/m/d H:i:s';
		}
		echo '今日の日付:' . date($pattern);
		
		/*
		$t = time();
		$t = $t + $day*(60*60*24) + $hour*(60*60);
		
		Configure::write('debug',0);
		echo '今から' . $day . '日' . $hour . '時間後の日時: ' . date('Y-m-d h:i:s',$t);
		*/
	}
}