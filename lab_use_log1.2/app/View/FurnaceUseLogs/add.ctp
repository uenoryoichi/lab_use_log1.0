<div class="furnaceUseLogs form">
<?php echo $this->Form->create('FurnaceUseLog'); ?>
	<fieldset>
		<legend><?php echo __('Add Furnace Use Log'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('annealing_temperature', array('rows' => 1));
		echo $this->Form->input('annealing_time', array('rows' => 1));
		echo $this->Form->input('amounts', array('rows' => 1));
		echo $this->Form->input('memo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<?php //左側のActionリスト ?>
<?php echo $this->element('Action');?>

