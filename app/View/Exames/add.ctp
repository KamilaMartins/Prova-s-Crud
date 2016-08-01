<div class="row">
	<div class="col-md-3">
		<div class="panel panel-info">
			<div class="panel-heading text-center"><h3>Menu</h3></div>
			<div class="panel-body">
				<?php echo $this->Html->link('Voltar', 
																			array('controller' => 'procedimentos',
																						'action' => 'index'),
																			array('class' => 'btn btn-default btn-lg')). '<br><br>'; ?>

				<?php echo $this->Html->link('Sair', 
																			array('controller' => 'pacientes', 
																						'action' => 'logout'),
																			array('class' => 'btn btn-default btn-lg')); ?>
			</div>
		</div>
	</div>
	
	<div class="col-md-9">
		<?php echo $this->Form->create('Exame'); ?>
		<fieldset>
			<legend><?php echo 'Adicionar Procedimento'; ?></legend>
		<?php
			echo $this->Form->input('data', array(
		    'type' => 'date',
		    'label' => 'Data prevista',
		    'dateFormat' => 'DMY',
		    'minYear' => date('Y'),
		    'maxYear' => date('Y') + 18,
		    'class' => 'form-control'
				)
			);
			echo $this->Form->hidden('paciente_id');
			echo $this->Form->hidden('procedimento_id');
		?>
		</fieldset>
		<?php echo '<br>' . $this->Form->end('Adicionar'); ?>

	</div><!-- end col md 12 -->
</div><!-- end row -->