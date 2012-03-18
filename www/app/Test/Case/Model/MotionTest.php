<?php
/* Motion Test cases generated on: 2012-03-18 16:12:35 : 1332054755*/
App::uses('Motion', 'Model');

/**
 * Motion Test Case
 *
 */
class MotionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.motion', 'app.category', 'app.scene', 'app.motions_scene');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Motion = ClassRegistry::init('Motion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Motion);

		parent::tearDown();
	}

}
