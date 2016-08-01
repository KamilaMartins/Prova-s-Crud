<?php
App::uses('AppModel', 'Model');
/**
 * Procedimento Model
 *
 * @property Exame $Exame
 */
class Procedimento extends AppModel {

	public $hasMany = array(
		'Exame' => array(
			'className' => 'Exame',
			'foreignKey' => 'procedimento_id',
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
