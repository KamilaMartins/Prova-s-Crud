<?php
App::uses('AppController', 'Controller');
/**
 * Procedimentos Controller
 *
 * @property Procedimento $Procedimento
 * @property PaginatorComponent $Paginator
 */
class ProcedimentosController extends AppController {

	public $components = array('Paginator', 'Flash', 'Session');

	public function index() {
		$options['order'] = array(
            'Procedimento.nome ASC'
        );

		$procedimentos = $this->Procedimento->find('all', $options);
		$this->set('procedimentos', $procedimentos);

		$paciente = $this->Session->read('Paciente');
        $this->set('idPaciente', $paciente[0]['Paciente']['id']);
	}

	public function index_admin() {
		$this->set('procedimentos', $this->Procedimento->find('all'));
	}
}
