<?php
App::uses('Nudge', 'Model');

/**
 * Nudge Test Case
 *
 */
class NudgeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nudge',
		'app.user',
		'app.request',
		'app.category',
		'app.suggestion',
		'app.question',
		'app.requests_question',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Nudge = ClassRegistry::init('Nudge');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nudge);

		parent::tearDown();
	}

}
