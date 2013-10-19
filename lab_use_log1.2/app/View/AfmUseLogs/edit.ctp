<div class="afmUseLogs form">
<?php echo $this->Form->create('AfmUseLog'); ?>
	<fieldset>
		<legend><?php echo __('Edit Afm Use Log'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('samples');
		echo $this->Form->input('memo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<?php //左側のActionリスト ?>
<?php echo $this->element('Action');?>

