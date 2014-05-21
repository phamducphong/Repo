<?php
class Board extends AppModel{
	public $name = 'Board';
	
	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'message' => '名前を記入してください。'
		),
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'タイトルを記入してください。'
		),
		'content' => array(
			'rule' => 'notEmpty',
			'message' => '内容を記入してください。'
		)
	);
	
	public $belongsTo = array(
		"Personal" => array(
			'className' => 'Personal',
			'conditions' => '',
			'order' => '',
			'dependent' => false,
			'foreignKey' => 'personal_id'
		)
	);
}