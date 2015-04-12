<?php
/**
 * TestFixture
 *
 */
class TestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'testID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'uID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'time_stamp' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'sbID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'testLevel' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'testID', 'unique' => 1),
			'uID' => array('column' => 'uID', 'unique' => 0),
			'sbID' => array('column' => 'sbID', 'unique' => 0)
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
			'testID' => 1,
			'uID' => 1,
			'time_stamp' => 1428775232,
			'sbID' => 1,
			'testLevel' => 1
		),
	);

}
