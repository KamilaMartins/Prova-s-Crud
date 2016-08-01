<div class="col-md-3">
	<div class="panel panel-info">
		<div class="panel-heading text-center"><h3>Menu</h3></div>
		<div class="panel-body">
			<?php echo $this->Html->link('Página Inicial', 
																		array('controller' => 'pages', 
																					'action' => 'display'),
																		array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>

			<?php echo $this->Html->link('Listar Exames', 
																		array('action' => 'list_exames'),
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
	<h2><?php echo 'Relatorio por Procedimento'; $result = 0; $total = 0; ?></h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th><?php echo 'Nome'; ?></th>
				<th><?php echo 'Valor'; ?></th>
				<th><?php echo 'Exames'; ?></th>
				<th><?php echo 'Total'; ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($procedimentos as $procedimento): ?>
			<tr>
				<td><?php echo h($procedimento['Procedimento']['nome']); ?>&nbsp;</td>
				<td><?php echo h('R$' . $procedimento['Procedimento']['preco']); ?>&nbsp;</td>
				<td><?php echo h(count($procedimento['Exame'])); ?>&nbsp;</td>
				<?php 
					$valor = 0.0;
						for ($i=0; $i < count($procedimento['Exame']); $i++) { 
							$valor += $procedimento['Procedimento']['preco'];
						}

						$result += count($procedimento['Exame']);
						$total += $valor;
				?>
				<td><?php echo 'R$' . $valor; ?>&nbsp;</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<hr>

	<h2><?php echo 'Relatorio Geral por Paciente'; $result = 0; $total = 0; ?></h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th><?php echo 'Nome'; ?></th>
				<th><?php echo 'Exames'; ?></th>
				<th><?php echo 'Total'; ?></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($pacientes as $paciente): ?>
			<tr>
				<td><?php echo h($paciente['Paciente']['nome']); ?>&nbsp;</td>
				<td><?php echo h(count($paciente['Exame'])); ?>&nbsp;</td>
				<?php 
					$valor = 0.0;
						for ($i=0; $i < count($paciente['Exame']); $i++) { 
							$id = $paciente['Exame'][$i]['procedimento_id'];
							$valor += $procedimentos[$id-1]['Procedimento']['preco'];
						}

						$result += count($paciente['Exame']);
						$total += $valor;
				?>
				<td><?php echo 'R$' . $valor; ?>&nbsp;</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<strong>
		<?php
		echo "<br>Total de exames: " . $result . "<br>";
		echo "Valor total dos exames: R$" . $total . "<br><br>"; 
		?>
	</strong>
</div>

