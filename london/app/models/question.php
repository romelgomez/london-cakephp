<?php
class Question extends AppModel {
	var $name = 'Question';
	var $displayField = 'question';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'Answer' => array(
			'className' => 'Answer',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>