<?php
App::uses('AppModel', 'Model');
/**
 * Topic Model
 *
 */
class Topic extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'topID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'topID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'topID' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'topName' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
