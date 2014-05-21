<?php
class HelloController extends AppController{
	
	public $name = 'Hello';
	public $uses = 'null';
	public $layout = "hello";
	
	public function index(){
		App::uses('Sanitize', 'Utility');
		$result = "";
		if ($this->request->isPost()){
			$result = "<pre>※送信された情報<br/>";
			foreach ($this->request->data['HelloForm'] as $key => $val){
				$result .= $key . ' => ' . $val . '<br>';
			}
			$result .= "</pre>";
		}else {
			$result = "※なにか書いて送信してください。";
		}
		
		$this->set("result", Sanitize::stripAll($result));
	}
	
	/*
	public function index(){
		
	}
	
	public function other(){
		App::uses('Sanitize', 'Utility');
		$str = $this->request->data('text1');
		$result = "";
		if ($str != ""){
			$result = "you typed: " . $str;
		}else{
			$result = "empty";
		}
		$this->set("result",Sanitize::stripAll($result));
	}
	
	public function sendForm1(){
		$str = $this->request->query['text1'];
		$result = "";
		if ($str != ""){
			$result = "you typed: " . $str;
		}else{
			$result = "empty";
		}
		
		$this->set("result",htmlspecialchars($result));
	}
	
	public function sendForm(){
		App::uses('Sanitize', 'Utility');
		
		foreach($this->request->query as $key=>$val){
			$result .= $key . " => " . $val . "</br>";
		}
		
		$this->set("result",Sanitize::stripAll($result));
		
	}
	*/
	
	/*
	public $autoLayout;
	public $autoRender;
	
	public function index(){
		$this->autoLayout = true;
		$this->autoRender = true;
	}
	
	public function other(){
		$this->autoLayout = false;
		$this->autoRender = true;
	}
	*/
}
?>