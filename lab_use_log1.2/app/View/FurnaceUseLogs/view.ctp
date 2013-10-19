<div class="furnaceUseLogs view">
<h2><?php echo __('Furnace Use Log'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($furnaceUseLog['FurnaceUseLog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($furnaceUseLog['User']['name'], array('controller' => 'users', 'action' => 'view', $furnaceUseLog['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($furnaceUseLog['FurnaceUseLog']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($furnaceUseLog['FurnaceUseLog']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Annealing Temperature'); ?></dt>
		<dd>
			<?php echo h($furnaceUseLog['FurnaceUseLog']['annealing_temperature']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Annealing Time'); ?></dt>
		<dd>
			<?php echo h($furnaceUseLog['FurnaceUseLog']['annealing_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amounts'); ?></dt>
		<dd>
			<?php echo h($furnaceUseLog['FurnaceUseLog']['amounts']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Memo'); ?></dt>
		<dd>
			<?php echo h($furnaceUseLog['FurnaceUseLog']['memo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($furnaceUseLog['FurnaceUseLog']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($furnaceUseLog['FurnaceUseLog']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
	<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Edit Furnace Use Log'), array('action' => 'edit', $furnaceUseLog['FurnaceUseLog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Furnace Use Log'), array('action' => 'delete', $furnaceUseLog['FurnaceUseLog']['id']), null, __('Are you sure you want to delete # %s?', $furnaceUseLog['FurnaceUseLog']['id'])); ?> </li>
	</ul>
	</div>
</div>

<?php //左側のActionリスト ?>
<?php echo $this->element('Action');?>
