<?php
App::uses('AppModel', 'Model');
/**
 * Question Model
 *
 * @property Request $Request
 */
class Question extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Request' => array(
			'className' => 'Request',
			'joinTable' => 'requests_questions',
			'foreignKey' => 'question_id',
			'associationForeignKey' => 'request_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
