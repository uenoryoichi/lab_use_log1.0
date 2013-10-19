<div class="furnaceUseLogs index">
	<h2><?php echo __('Furnace Use Logs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start'); ?></th>
			<th><?php echo $this->Paginator->sort('end'); ?></th>
			<th><?php echo $this->Paginator->sort('annealing_temperature'); ?></th>
			<th><?php echo $this->Paginator->sort('annealing_time'); ?></th>
			<th><?php echo $this->Paginator->sort('amounts'); ?></th>
			<th><?php echo $this->Paginator->sort('memo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($furnaceUseLogs as $furnaceUseLog): ?>
	<tr>
		<td><?php echo h($furnaceUseLog['FurnaceUseLog']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($furnaceUseLog['User']['name'], array('controller' => 'users', 'action' => 'view', $furnaceUseLog['User']['id'])); ?>
		</td>
		<td><?php echo h($furnaceUseLog['FurnaceUseLog']['start']); ?>&nbsp;</td>
		<td><?php echo h($furnaceUseLog['FurnaceUseLog']['end']); ?>&nbsp;</td>
		<td><?php echo h($furnaceUseLog['FurnaceUseLog']['annealing_temperature']); ?>&nbsp;</td>
		<td><?php echo h($furnaceUseLog['FurnaceUseLog']['annealing_time']); ?>&nbsp;</td>
		<td><?php echo h($furnaceUseLog['FurnaceUseLog']['amounts']); ?>&nbsp;</td>
		<td><?php echo h($furnaceUseLog['FurnaceUseLog']['memo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $furnaceUseLog['FurnaceUseLog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $furnaceUseLog['FurnaceUseLog']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $furnaceUseLog['FurnaceUseLog']['id']), null, __('Are you sure you want to delete # %s?', $furnaceUseLog['FurnaceUseLog']['id'])); ?>
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

<?php //左側のActionリスト ?>
<?php echo $this->element('Action');?>
