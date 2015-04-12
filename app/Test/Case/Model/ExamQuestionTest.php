<?php
App::uses('ExamQuestion', 'Model');

/**
 * ExamQuestion Test Case
 *
 */
class ExamQuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exam_question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExamQuestion = ClassRegistry::init('ExamQuestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExamQuestion);

		parent::tearDown();
	}

}
