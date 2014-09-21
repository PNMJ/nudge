<div id="the-rest">
	<div id="header">Request</div>
	<div id="the-rest-content ">
		<?php echo $this->Form->create('Request'); ?>
			<h1>Select a category</h1>
			
			<?php echo $this->Form->input('category',array('type'=>'select','options'=>$categories, 'class' =>'input-stuff', 'label'=>''));  ?>
			
			<br />
			<?php foreach($questions as $key=>$question){ ?>
				<h1><?php echo ucfirst($question['Question']['question']); ?></h1>
				<br />
				<?php echo $this->Form->input('question_'.$question['Question']['id'], array('class' =>'input-stuff', 'label'=>'', 'placeholder'=>'Type answer here')); ?>
			<?php } ?>
			
			<br />
			<br />
			<br />
			<?php echo $this->Form->submit('submit', array('class'=>'input-stuff', 'style'=>'width:200px;')) ;?>
			
		<?php $this->form->end(); ?>
	</div>
</div>