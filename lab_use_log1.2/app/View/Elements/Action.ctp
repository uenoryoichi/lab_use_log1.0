<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<h2><?php echo 'User';?></h2>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users','action'=> 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users','action'=> 'add')); ?> </li>
		<h2><?php echo 'AFM';?></h2>
		<li><?php echo $this->Html->link(__('List Afm Use Logs'), array('controller' => 'afm_use_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Afm Use Log'), array('controller' => 'afm_use_logs', 'action' => 'add')); ?> </li>
		<h2><?php echo 'electric furnace';?></h2>
		<li><?php echo $this->Html->link(__('List Furnace Use Logs'), array('controller' => 'furnace_use_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Furnace Use Log'), array('controller' => 'furnace_use_logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
