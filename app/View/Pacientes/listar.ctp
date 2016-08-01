<div class="col-md-3">
	<div class="panel panel-info">
		<div class="panel-heading text-center"><h3>Menu</h3></div>
		<div class="panel-body">
			<?php echo $this->Html->link('Página Inicial', 
																		array('controller' => 'pages', 
																					'action' => 'display'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>

			<?php echo $this->Html->link('Listar Exames', 
																		array('controller' => 'exames', 
																					'action' => 'list_exames'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>

			<?php echo $this->Html->link('Listar Pacientes', 
																		array('controller' => 'pacientes', 
																					'action' => 'listar'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>

			<?php echo $this->Html->link('Listar Procedimentos', 
																		array('controller' => 'procedimentos',
																					'action' => 'index_admin'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>

			<?php echo $this->Html->link('Total dos Exames', 
																		array('controller' => 'exames', 
																					'action' => 'total_exames'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>
		</div>
	</div>
</div>

<div class="col-md-9">
	<h2><?php echo 'Pacientes'; $total = 0; $valorTotal = 0; ?></h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th><?php echo 'Nome'; ?></th>
				<th><?php echo 'Login'; ?></th>
				<th><?php echo 'Senha'; ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pacientes as $paciente): ?>
			<tr>
				<td><?php echo h($paciente['Paciente']['nome']); ?>&nbsp;</td>
				<td><?php echo h($paciente['Paciente']['login']); ?>&nbsp;</td>
				<td><?php echo h($paciente['Paciente']['senha']); ?>&nbsp;</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
