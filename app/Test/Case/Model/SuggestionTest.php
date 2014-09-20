<?php
App::uses('Suggestion', 'Model');

/**
 * Suggestion Test Case
 *
 */
class SuggestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.suggestion',
		'app.user',
		'app.product',
		'app.request',
		'app.category',
		'app.question',
		'app.requests_question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Suggestion = ClassRegistry::init('Suggestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Suggestion);

		parent::tearDown();
	}

}
