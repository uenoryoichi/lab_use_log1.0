<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
	<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
	</ul>
	</div>
</div>

<?php //左側のActionリスト ?>
<?php echo $this->element('Action');?>


<div class="related">
	<h3><?php echo __('Related Afm Use Logs'); ?></h3>
	<?php if (!empty($user['AfmUseLog'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Samples'); ?></th>
		<th><?php echo __('Memo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['AfmUseLog'] as $afmUseLog): ?>
		<tr>
			<td><?php echo $afmUseLog['id']; ?></td>
			<td><?php echo $afmUseLog['user_id']; ?></td>
			<td><?php echo $afmUseLog['start_date']; ?></td>
			<td><?php echo $afmUseLog['end_date']; ?></td>
			<td><?php echo $afmUseLog['samples']; ?></td>
			<td><?php echo $afmUseLog['memo']; ?></td>
			<td><?php echo $afmUseLog['created']; ?></td>
			<td><?php echo $afmUseLog['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'afm_use_logs', 'action' => 'view', $afmUseLog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'afm_use_logs', 'action' => 'edit', $afmUseLog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'afm_use_logs', 'action' => 'delete', $afmUseLog['id']), null, __('Are you sure you want to delete # %s?', $afmUseLog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Afm Use Log'), array('controller' => 'afm_use_logs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Furnace Use Logs'); ?></h3>
	<?php if (!empty($user['FurnaceUseLog'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('Annealing Temperature'); ?></th>
		<th><?php echo __('Annealing Time'); ?></th>
		<th><?php echo __('Amounts'); ?></th>
		<th><?php echo __('Memo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['FurnaceUseLog'] as $furnaceUseLog): ?>
		<tr>
			<td><?php echo $furnaceUseLog['id']; ?></td>
			<td><?php echo $furnaceUseLog['user_id']; ?></td>
			<td><?php echo $furnaceUseLog['start']; ?></td>
			<td><?php echo $furnaceUseLog['end']; ?></td>
			<td><?php echo $furnaceUseLog['annealing_temperature']; ?></td>
			<td><?php echo $furnaceUseLog['annealing_time']; ?></td>
			<td><?php echo $furnaceUseLog['amounts']; ?></td>
			<td><?php echo $furnaceUseLog['memo']; ?></td>
			<td><?php echo $furnaceUseLog['created']; ?></td>
			<td><?php echo $furnaceUseLog['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'furnace_use_logs', 'action' => 'view', $furnaceUseLog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'furnace_use_logs', 'action' => 'edit', $furnaceUseLog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'furnace_use_logs', 'action' => 'delete', $furnaceUseLog['id']), null, __('Are you sure you want to delete # %s?', $furnaceUseLog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Furnace Use Log'), array('controller' => 'furnace_use_logs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
