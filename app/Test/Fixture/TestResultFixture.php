<?php
/**
 * TestResultFixture
 *
 */
class TestResultFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'test_result';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'trID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'uID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'testID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'time_stamp' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'score' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'trID', 'unique' => 1),
			'uID' => array('column' => 'uID', 'unique' => 0),
			'testID' => array('column' => 'testID', 'unique' => 0)
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
			'trID' => 1,
			'uID' => 1,
			'testID' => 1,
			'time_stamp' => 1428806277,
			'score' => 1
		),
	);

}
