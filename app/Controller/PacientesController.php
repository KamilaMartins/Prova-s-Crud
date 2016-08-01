<?php
App::uses('AppController', 'Controller');
/**
 * Pacientes Controller
 *
 * @property Paciente $Paciente
 * @property PaginatorComponent $Paginator
 */
class PacientesController extends AppController {

	public $components = array('Paginator', 'Flash', 'Session');

	public function index_login() {
	}

	public function login() {
		if (!empty($this->data['Paciente']['email']) and
			!empty($this->data['Paciente']['senha'])) {
			$paciente = $this->validar();

			if ($paciente != false) {
				$this->Session->write('Paciente', $paciente);

				$this->set('paciente', $paciente);
				$this->redirect(array('controller' => 'procedimentos', 'action' => 'index', $paciente['0']['Paciente']['id']));
				exit();
			} else {
				$this->Flash->error(__('Login e/ou senha inválidos!'));
				$this->redirect(array('action' => 'index_login'));
				exit();
			}
		} else {
			$this->redirect(array('action' => 'index_login'));
			exit();
		}
	}

	public function validar(){
    	$paciente = $this->Paciente->findAllByLoginAndSenha(
    								$this->data['Paciente']['email'],
    								$this->data['Paciente']['senha']);
    	if (!empty($paciente)) {
    		return $paciente;
    	} else {
    		return false;
    	}
    }

	public function listar() {
		$options['order'] = array(
			'Paciente.nome ASC'
		);

		$pacientes = $this->Paciente->find('all', $options);
		$this->set('pacientes', $pacientes);

		$procedimentos = $this->Paciente->procedimentos();
		$this->set('procedimentos', $procedimentos);
	}

	public function list_exames($id = null) {
		$options['conditions'] = array(
			'Paciente.id' => $id
		);

		$options['order'] = array(
			'Exame.data DESC',
			'Procedimento.nome'
		);

		$this->set('exames', $this->Paciente->Exame->find('all', $options));
	}

	public function logout(){
    	$this->Session->destroy();
    	$this->redirect('/');
    	exit();
    }
}
