<div class="scenes view">
<h2><?php  echo __('Scene');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($scene['Scene']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($scene['Scene']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($scene['Scene']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($scene['Scene']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Scene'), array('action' => 'edit', $scene['Scene']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Scene'), array('action' => 'delete', $scene['Scene']['id']), null, __('Are you sure you want to delete # %s?', $scene['Scene']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Scenes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scene'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Motions'), array('controller' => 'motions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motion'), array('controller' => 'motions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Motions');?></h3>
	<?php if (!empty($scene['Motion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($scene['Motion'] as $motion): ?>
		<tr>
			<td><?php echo $motion['id'];?></td>
			<td><?php echo $motion['name'];?></td>
			<td><?php echo $motion['category_id'];?></td>
			<td><?php echo $motion['created'];?></td>
			<td><?php echo $motion['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'motions', 'action' => 'view', $motion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'motions', 'action' => 'edit', $motion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'motions', 'action' => 'delete', $motion['id']), null, __('Are you sure you want to delete # %s?', $motion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Motion'), array('controller' => 'motions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
