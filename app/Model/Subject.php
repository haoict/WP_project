<?php
App::uses('AppModel', 'Model');
/**
 * Subject Model
 *
 */
class Subject extends AppModel {
    var $name = "Subject";
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'sbID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'sbID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'sbID' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sbName' => array(
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
