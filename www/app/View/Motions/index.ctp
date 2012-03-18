<div class="motions index">
	<h2><?php echo __('Motions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('category_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($motions as $motion): ?>
	<tr>
		<td><?php echo h($motion['Motion']['id']); ?>&nbsp;</td>
		<td><?php echo h($motion['Motion']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($motion['Category']['name'], array('controller' => 'categories', 'action' => 'view', $motion['Category']['id'])); ?>
		</td>
		<td><?php echo h($motion['Motion']['created']); ?>&nbsp;</td>
		<td><?php echo h($motion['Motion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $motion['Motion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $motion['Motion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $motion['Motion']['id']), null, __('Are you sure you want to delete # %s?', $motion['Motion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Motion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scenes'), array('controller' => 'scenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scene'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
	</ul>
</div>
