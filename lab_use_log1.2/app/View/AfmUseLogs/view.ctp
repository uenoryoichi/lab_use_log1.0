<div class="afmUseLogs view">
<h2><?php echo __('Afm Use Log'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($afmUseLog['AfmUseLog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($afmUseLog['AfmUseLog']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($afmUseLog['AfmUseLog']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($afmUseLog['AfmUseLog']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Samples'); ?></dt>
		<dd>
			<?php echo h($afmUseLog['AfmUseLog']['samples']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Memo'); ?></dt>
		<dd>
			<?php echo h($afmUseLog['AfmUseLog']['memo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($afmUseLog['AfmUseLog']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($afmUseLog['AfmUseLog']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<?php //左側のActionリスト ?>
<?php echo $this->element('Action');?>
