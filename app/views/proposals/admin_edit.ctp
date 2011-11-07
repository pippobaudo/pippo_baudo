<div class="proposals form">
<?php echo $this->Form->create('Proposal');?>
	<fieldset>
		<legend><?php __('Admin Edit Proposal'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('retailer_id');
		echo $this->Form->input('deal_id');
		echo $this->Form->input('purchasinggap_id');
		echo $this->Form->input('percent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Proposal.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Proposal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proposals', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Retailers', true), array('controller' => 'retailers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Retailer', true), array('controller' => 'retailers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals', true), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal', true), array('controller' => 'deals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchasinggaps', true), array('controller' => 'purchasinggaps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchasinggap', true), array('controller' => 'purchasinggaps', 'action' => 'add')); ?> </li>
	</ul>
</div>