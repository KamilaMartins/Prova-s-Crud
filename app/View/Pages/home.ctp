<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-info">
			<div class="panel-heading text-center"><h3>Menu</h3></div>
			<div class="panel-body text-center">
				<?php echo $this->Html->link('Área Admin', 
																			array('controller' => 'admins', 
																						'action' => 'index'),
																			array('class' => 'btn btn-danger btn-lg')) . '<br><br>'; ?>

				<?php echo $this->Html->link('Visualizar Procedimentos', 
																			array('controller' => 'procedimentos', 
																						'action' => 'index'),
																			array('class' => 'btn btn-info btn-lg')) . '<br><br>'; ?>
				
				<?php 
					if ($this->Session->check('Paciente')) {
						echo $this->Html->link('Sair', 
																		array('controller' => 'pacientes', 
																					'action' => 'logout'),
																		array('class' => 'btn btn-warning btn-lg'));
				 	} else {
						echo $this->Html->link('Área do Paciente', 
																			array('controller' => 'pacientes', 
																						'action' => 'index_login'),
																			array('class' => 'btn btn-warning btn-lg')); } ?>
			</div>
		</div>
	</div>
</div>