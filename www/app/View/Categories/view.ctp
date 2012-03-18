<div class="categories view">
<h2><?php  echo __('Category');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($category['Category']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Motions'), array('controller' => 'motions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motion'), array('controller' => 'motions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Motions');?></h3>
	<?php if (!empty($category['Motion'])):?>
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
		foreach ($category['Motion'] as $motion): ?>
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
