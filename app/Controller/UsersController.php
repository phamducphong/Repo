<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property AuthComponent $Auth
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Auth' => array('Auth'=>array('authError'=>'ログインしてください。')));
	public $name = "Users";
	
	public function beforeFilter(){
		$this->Auth->allow('add');
		//$this->Auth->allow('logout');
		$this->Auth->authError = "あなたはログインしていません。";
		$this->Auth->loginError = "ログインに失敗しました。";
	}
	
	public function add(){
		if (!empty($this->data)){
			if ($this->data){
				$this->User->create();
				$this->User->save($this->data);
				$this->redirect(array('action'=>'login'));
			}
		}
	}
	
	public function logout(){
		$this->Auth->logout();
	}
	
	public function login(){
		if ($this->request->isPost()){
			if ($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			}else{
				$this->Session->setFlash('ユーザー名かパスワードが違います。','default',array(),'auth');
			}
		}
	}
	
	
	
	
	
	
}
