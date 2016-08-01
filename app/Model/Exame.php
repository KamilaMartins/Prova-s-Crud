<?php
App::uses('AppModel', 'Model');
App::uses('Paciente', 'Model');
App::uses('Procedimento', 'Model');
/**
 * Exame Model
 *
 * @property Paciente $Paciente
 * @property Procedimento $Procedimento
 */
class Exame extends AppModel {

	public $belongsTo = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'paciente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Procedimento' => array(
			'className' => 'Procedimento',
			'foreignKey' => 'procedimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function procedimentos() {
        $procedimentoModel = new Procedimento();
        $procedimentos = $procedimentoModel->find('all');
        return $procedimentos;
	}

	public function pacientes() {
        $pacienteModel = new Paciente();
        $pacientes = $pacienteModel->find('all');
        return $pacientes;
	}
}
