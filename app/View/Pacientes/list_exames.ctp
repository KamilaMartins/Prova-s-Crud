<div class="col-md-3">
	<div class="panel panel-info">
		<div class="panel-heading text-center"><h3>Menu</h3></div>
		<div class="panel-body">
			<?php echo $this->Html->link('Página Inicial', 
																		array('controller' => 'pages', 
																					'action' => 'display'),
																		array('class' => 'btn btn-default btn-lg')) . '<br><br>'; ?>

			<?php echo $this->Html->link('Visualizar Procedimentos', 
																		array('controller' => 'procedimentos', 
																					'action' => 'index'),
																		array('class' => 'btn btn-default btn-lg')) . '<br><br>'; ?>
			
			<?php 
				if ($this->Session->check('Paciente')) {
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
	<h2><?php echo 'Exames'; $totalValor = 0.00; $totalExames = 0; ?></h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th><?php echo 'Nome'; ?></th>
				<th><?php echo 'Data'; ?></th>
				<th><?php echo 'Valor'; ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($exames as $exame): 
				$totalValor += $exame['Procedimento']['preco']; 
				$totalExames++;
			?>
			<tr>
				<td><?php echo h($exame['Procedimento']['nome']); ?>&nbsp;</td>
				<td><?php echo h($exame['Exame']['data']); ?>&nbsp;</td>
				<td><?php echo h($exame['Procedimento']['preco']); ?>&nbsp;</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<strong>
		<?php
		echo " Total dos exames: " . $totalExames . ". Valor total: R$" . $totalValor;
		?>	
	</strong>
</div>
