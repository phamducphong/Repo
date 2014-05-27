<?php
class BoardsController extends AppController{
	
	public $name = 'Board';
	public $uses = array('Board', 'Personal');
	public $components = array('Session','Auth'=>array('authError'=>'ログインしてください。'), 'Acl');
	private $acl_check = false;
	
	public function index(){
		
		/* パーミッション作成のテストのために一回だけ実行する
		$this->makeARO();
		$this->makeARO2();
		$this->makeACO();
		$this->makePermission();
		*/
		
		if ($this->acl_check){
			$data = $this->Board->find('all',array('order'=>'Board.id desc'));
			$this->set('data', $data);
		}else {
			$this->set('data',$data);
		}
		
	}
	
	/* パーミッション作成のテストのために一回だけ実行する
	// AROテーブルに書き込む親ユーザー
	public function makeARO(){
		$aro = new Aro();
		$groups = array(
			1 => array('alias'=>'admin'),
			2 => array('alias'=>'member'),
			3 => array('alias'=>'guest')
		);
		
		foreach($groups as $data){
			$aro->create();
			$aro->save($data);
		}
	}
	
	
	// AROテーブルに書き込む子ユーザー
	public function makeARO2(){
		$aro = new Aro();
		$groups = array(
			1 => array('alias'=>'phong','parent_id'=>2),
			2 => array('alias'=>'hanako','parent_id'=>2),
			3 => array('alias'=>'matumoto','parent_id'=>3),
			4 => array('alias'=>'admin','parent_id'=>1),
		);
		
		foreach($groups as $data){
			$aro->create();
			$aro->save($data);
		}
	}
	
	// ACOテーブルに書き込むオブジェクト
	public function makeACO(){
		$aco = new Aco();
		$groups = array(
			1 => array('alias'=>'board'),
			2 => array('alias'=>'personal')
		);
		
		foreach ($groups as $data){
			$aco->create();
			$aco->save($data);
		}
	}
	
	// パーミッション作成
	public function makePermission(){
		$this->Acl->allow('admin', 'board');
		$this->Acl->allow('member', 'board');
		$this->Acl->deny('member', 'board','create');
		$this->Acl->deny('member', 'board','delete');
		$this->Acl->deny('guest', 'board');
		$this->Acl->allow('guest', 'board','read');
	}
	*/
	
	public function beforeFilter() {
		$uname = $this->Auth->user('username');
		
		$act = $this->action;
		$act = $act=='index' ? 'read' : $act;
		$act = $act=='show' ? 'read' : $act;
		$act = $act=='show2' ? 'read' : $act;
		$act = $act=='add' ? 'create' : $act;
		$act = $act=='edit' ? 'update' : $act;
		$act = $act=='del' ? 'delete' : $act;
		
		if ($this->Acl->check($uname, 'board', $act)){
			$this->acl_check = true;
			$this->Session->setFlash(__($uname . ':' . $act . ':アクセスできます',true));
		}else {
			$this->acl_check = false;
			$this->Session->setFlash(__($uname . ':' . $act . ':アクセスできません',true));
		}
	}
	
	public function deny(){
		
	}
	
	
	public function add(){
		if ($this->acl_check==false){
			$this->redirect('deny');
		}
		
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