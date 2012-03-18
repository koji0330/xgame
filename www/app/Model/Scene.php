<?php
App::uses('AppModel', 'Model');
/**
 * Scene Model
 *
 * @property Motion $Motion
 */
class Scene extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Motion' => array(
			'className' => 'Motion',
			'joinTable' => 'motions_scenes',
			'foreignKey' => 'scene_id',
			'associationForeignKey' => 'motion_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
