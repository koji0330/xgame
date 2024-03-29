<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property Motion $Motion
 */
class Category extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'category';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Motion' => array(
			'className' => 'Motion',
			'foreignKey' => 'category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
