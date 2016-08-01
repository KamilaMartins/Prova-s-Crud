<?php
App::uses('AppModel', 'Model');
App::uses('Procedimento', 'Model');
/**
 * Paciente Model
 *
 * @property Exame $Exame
 */
class Paciente extends AppModel {

	public $hasMany = array(
		'Exame' => array(
			'className' => 'Exame',
			'foreignKey' => 'paciente_id',
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

	public function procedimentos() {
        $procedimentoModel = new Procedimento();
        $procedimentos = $procedimentoModel->find('all');
        return $procedimentos;
	}
}
