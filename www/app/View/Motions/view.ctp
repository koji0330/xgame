<div class="motions view">
<h2><?php  echo __('Motion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($motion['Motion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($motion['Motion']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($motion['Category']['name'], array('controller' => 'categories', 'action' => 'view', $motion['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($motion['Motion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($motion['Motion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Motion'), array('action' => 'edit', $motion['Motion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Motion'), array('action' => 'delete', $motion['Motion']['id']), null, __('Are you sure you want to delete # %s?', $motion['Motion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Motions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scenes'), array('controller' => 'scenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scene'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Scenes');?></h3>
	<?php if (!empty($motion['Scene'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($motion['Scene'] as $scene): ?>
		<tr>
			<td><?php echo $scene['id'];?></td>
			<td><?php echo $scene['name'];?></td>
			<td><?php echo $scene['created'];?></td>
			<td><?php echo $scene['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'scenes', 'action' => 'view', $scene['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'scenes', 'action' => 'edit', $scene['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'scenes', 'action' => 'delete', $scene['id']), null, __('Are you sure you want to delete # %s?', $scene['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Scene'), array('controller' => 'scenes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
