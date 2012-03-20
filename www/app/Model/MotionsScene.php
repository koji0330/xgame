<?php
App::uses('AppModel', 'Model');
/**
 * MotionsScene Model
 *
 * @property Motion $Motion
 * @property Scene $Scene
 */
class MotionsScene extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Motion' => array(
			'className' => 'Motion',
			'foreignKey' => 'motion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Scene' => array(
			'className' => 'Scene',
			'foreignKey' => 'scene_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
