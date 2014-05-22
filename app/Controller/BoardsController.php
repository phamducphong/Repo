<?php
class BoardsController extends AppController{
	
	public $name = 'Board';
	public $uses = array('Board', 'Personal');
	public $components = array('Auth'=>array('authError'=>'ログインしてください。'));
	
	public function index(){
		$data = $this->Board->find('all',array('order'=>'Board.id desc'));
		$this->set('data', $data);
	}
	
	public function add(){
		if ($this->request->isPost()){
			if($this->Personal->checkNameAndPass($this->data) == false){
				$this->Personal->invalidate('name','名前またはパスワードを確認ください。');
				$this->Personal->invalidate('password','名前またはパスワードを確認ください。');
			}else{
				$res = $this->Personal->find('all',array(
					'conditions'=>array(
						'Personal.name'=>$this->data['Personal']['name'],
						'Personal.password'=>$this->data['Personal']['password']
						)
				));
				$record = $this->data['Board'];
				$record['personal_id']=$res[0]['Personal']['id'];
				$flg = $this->Board->save($record);
				if ($flg){
					$this->redirect('.');
				}
			}
		}
	}
	
	public function edit($param){
		if (!empty($this->data)){
			$this->set('data',$this->data);
			if ($this->Personal->checkNameAndPass($this->data) == false){
				$this->Personal->invalidate('password','パスワードを確認ください。');
			}else {
				$this->Board->save($this->data);
				$this->redirect('.');
			}
		}else {
			$this->Board->id = $param;
			$res = $this->Board->read();
			$res['Personal']['password'] = null;
			$this->data = $res;
			$this->set('data',$res);
		}
	}
	
	public function show($param){
		$data = $this->Board->find('all',array(
			'conditions'=>array('Board.id'=>$param)
		));
		$this->set('data',$data);
	}
	
	public function show2($param){
		$data = $this->Personal->find('all',array(
			'conditions'=>array('Personal.id'=>$param)
		));
		$this->set('data',$data);
	}
	
}
?>