<div class="col-md-3">
	<div class="panel panel-info">
		<div class="panel-heading text-center"><h3>Menu</h3></div>
		<div class="panel-body">
			<?php echo $this->Html->link('Página Inicial', 
																		array('controller' => 'pages', 
																					'action' => 'display'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>

			<?php 
				if ($this->Session->check('Paciente')) {
				 	echo $this->Html->link('Meus exames', 
				 													array('controller' => 'pacientes', 
				 																'action' => 'list_exames', $idPaciente),
																	array('class' => 'btn btn-default btn-lg')). '<br><br>';

					echo $this->Html->link('Sair', 
																	array('controller' => 'pacientes', 
																				'action' => 'logout'),
																	array('class' => 'btn btn-default btn-lg'));
			 	} 
			?>	
		</div>
	</div>
</div>

<div class="col-md-9">
	<h2><?php echo __('Procedimentos'); ?></h2>
	<table class="table table-striped">
		<thead>
			<tr>
					<th><?php echo 'Nome'; ?></th>
					<th><?php echo 'Preço'; ?></th>
					<th><?php echo 'Ações'; ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($procedimentos as $procedimento): ?>
			<tr>
				<td><?php echo h($procedimento['Procedimento']['nome']); ?>&nbsp;</td>
				<td><?php echo h($procedimento['Procedimento']['preco']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link('Adicionar', 
																				array('controller' => 'exames', 
																							'action' => 'add', $procedimento['Procedimento']['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
