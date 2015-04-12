<?php
/**
 * UserLevelFixture
 *
 */
class UserLevelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ulID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'uID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'sbID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'correctNum' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'totalNum' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ulID', 'unique' => 1),
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
			'ulID' => 1,
			'uID' => 1,
			'sbID' => 1,
			'correctNum' => 1,
			'totalNum' => 1
		),
	);

}
