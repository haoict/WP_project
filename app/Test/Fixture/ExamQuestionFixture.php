<?php
/**
 * ExamQuestionFixture
 *
 */
class ExamQuestionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'eqID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'testID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'qID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'A' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'B' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'C' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'D' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'eqID', 'unique' => 1),
			'testID' => array('column' => 'testID', 'unique' => 0),
			'qID' => array('column' => 'qID', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'eqID' => 1,
			'testID' => 1,
			'qID' => 1,
			'A' => 1,
			'B' => 1,
			'C' => 1,
			'D' => 1
		),
	);

}
