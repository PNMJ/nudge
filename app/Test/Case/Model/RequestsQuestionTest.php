<?php
App::uses('RequestsQuestion', 'Model');

/**
 * RequestsQuestion Test Case
 *
 */
class RequestsQuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.requests_question',
		'app.request',
		'app.user',
		'app.category',
		'app.suggestion',
		'app.question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RequestsQuestion = ClassRegistry::init('RequestsQuestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RequestsQuestion);

		parent::tearDown();
	}

}
