<div class="furnaceUseLogs form">
<?php echo $this->Form->create('FurnaceUseLog'); ?>
	<fieldset>
		<legend><?php echo __('Edit Furnace Use Log'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('annealing_temperature');
		echo $this->Form->input('annealing_time');
		echo $this->Form->input('amounts');
		echo $this->Form->input('memo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<?php //左側のActionリスト ?>
<?php echo $this->element('Action');?>
