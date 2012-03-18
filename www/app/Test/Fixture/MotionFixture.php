<?php
/* Motion Fixture generated on: 2012-03-18 16:12:35 : 1332054755 */

/**
 * MotionFixture
 *
 */
class MotionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'text', 'null' => false),
		'category_id' => array('type' => 'integer', 'null' => true),
		'created' => array('type' => 'integer', 'null' => true),
		'modified' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'category_id' => 1,
			'created' => 1,
			'modified' => 1
		),
	);
}
