<?php
App::uses('UserLevel', 'Model');

/**
 * UserLevel Test Case
 *
 */
class UserLevelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_level'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserLevel = ClassRegistry::init('UserLevel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserLevel);

		parent::tearDown();
	}

}
