<div class="scenes form">
<?php echo $this->Form->create('Scene');?>
	<fieldset>
		<legend><?php echo __('Edit Scene'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Motion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Scene.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Scene.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Scenes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Motions'), array('controller' => 'motions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motion'), array('controller' => 'motions', 'action' => 'add')); ?> </li>
	</ul>
</div>
