<?php
App::uses('TestResult', 'Model');

/**
 * TestResult Test Case
 *
 */
class TestResultTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.test_result'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TestResult = ClassRegistry::init('TestResult');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TestResult);

		parent::tearDown();
	}

}
